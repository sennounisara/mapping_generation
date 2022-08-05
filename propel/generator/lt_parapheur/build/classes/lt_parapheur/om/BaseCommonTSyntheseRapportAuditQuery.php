<?php


/**
 * Base class that represents a query for the 't_synthese_rapport_audit' table.
 *
 * 
 *
 * @method CommonTSyntheseRapportAuditQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTSyntheseRapportAuditQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTSyntheseRapportAuditQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonTSyntheseRapportAuditQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonTSyntheseRapportAuditQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonTSyntheseRapportAuditQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonTSyntheseRapportAuditQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonTSyntheseRapportAuditQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonTSyntheseRapportAuditQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonTSyntheseRapportAuditQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 *
 * @method CommonTSyntheseRapportAuditQuery groupById() Group by the id column
 * @method CommonTSyntheseRapportAuditQuery groupByOrganisme() Group by the organisme column
 * @method CommonTSyntheseRapportAuditQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonTSyntheseRapportAuditQuery groupByFichier() Group by the fichier column
 * @method CommonTSyntheseRapportAuditQuery groupByDate() Group by the date column
 * @method CommonTSyntheseRapportAuditQuery groupByHorodatage() Group by the horodatage column
 * @method CommonTSyntheseRapportAuditQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonTSyntheseRapportAuditQuery groupByTaille() Group by the taille column
 * @method CommonTSyntheseRapportAuditQuery groupByAnnee() Group by the annee column
 * @method CommonTSyntheseRapportAuditQuery groupByServiceId() Group by the service_id column
 *
 * @method CommonTSyntheseRapportAuditQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTSyntheseRapportAuditQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTSyntheseRapportAuditQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTSyntheseRapportAudit findOne(PropelPDO $con = null) Return the first CommonTSyntheseRapportAudit matching the query
 * @method CommonTSyntheseRapportAudit findOneOrCreate(PropelPDO $con = null) Return the first CommonTSyntheseRapportAudit matching the query, or a new CommonTSyntheseRapportAudit object populated from the query conditions when no match is found
 *
 * @method CommonTSyntheseRapportAudit findOneById(int $id) Return the first CommonTSyntheseRapportAudit filtered by the id column
 * @method CommonTSyntheseRapportAudit findOneByOrganisme(string $organisme) Return the first CommonTSyntheseRapportAudit filtered by the organisme column
 * @method CommonTSyntheseRapportAudit findOneByNomFichier(string $nom_fichier) Return the first CommonTSyntheseRapportAudit filtered by the nom_fichier column
 * @method CommonTSyntheseRapportAudit findOneByFichier(string $fichier) Return the first CommonTSyntheseRapportAudit filtered by the fichier column
 * @method CommonTSyntheseRapportAudit findOneByDate(string $date) Return the first CommonTSyntheseRapportAudit filtered by the date column
 * @method CommonTSyntheseRapportAudit findOneByHorodatage(resource $horodatage) Return the first CommonTSyntheseRapportAudit filtered by the horodatage column
 * @method CommonTSyntheseRapportAudit findOneByUntrusteddate(string $untrusteddate) Return the first CommonTSyntheseRapportAudit filtered by the untrusteddate column
 * @method CommonTSyntheseRapportAudit findOneByTaille(int $taille) Return the first CommonTSyntheseRapportAudit filtered by the taille column
 * @method CommonTSyntheseRapportAudit findOneByAnnee(string $annee) Return the first CommonTSyntheseRapportAudit filtered by the annee column
 * @method CommonTSyntheseRapportAudit findOneByServiceId(int $service_id) Return the first CommonTSyntheseRapportAudit filtered by the service_id column
 *
 * @method array findById(int $id) Return CommonTSyntheseRapportAudit objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonTSyntheseRapportAudit objects filtered by the organisme column
 * @method array findByNomFichier(string $nom_fichier) Return CommonTSyntheseRapportAudit objects filtered by the nom_fichier column
 * @method array findByFichier(string $fichier) Return CommonTSyntheseRapportAudit objects filtered by the fichier column
 * @method array findByDate(string $date) Return CommonTSyntheseRapportAudit objects filtered by the date column
 * @method array findByHorodatage(resource $horodatage) Return CommonTSyntheseRapportAudit objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonTSyntheseRapportAudit objects filtered by the untrusteddate column
 * @method array findByTaille(int $taille) Return CommonTSyntheseRapportAudit objects filtered by the taille column
 * @method array findByAnnee(string $annee) Return CommonTSyntheseRapportAudit objects filtered by the annee column
 * @method array findByServiceId(int $service_id) Return CommonTSyntheseRapportAudit objects filtered by the service_id column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTSyntheseRapportAuditQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTSyntheseRapportAuditQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTSyntheseRapportAudit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTSyntheseRapportAuditQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTSyntheseRapportAuditQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTSyntheseRapportAuditQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTSyntheseRapportAuditQuery) {
            return $criteria;
        }
        $query = new CommonTSyntheseRapportAuditQuery();
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
     * @return   CommonTSyntheseRapportAudit|CommonTSyntheseRapportAudit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTSyntheseRapportAuditPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTSyntheseRapportAuditPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTSyntheseRapportAudit A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom_fichier`, `fichier`, `date`, `horodatage`, `untrusteddate`, `taille`, `annee`, `service_id` FROM `t_synthese_rapport_audit` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTSyntheseRapportAudit();
            $obj->hydrate($row);
            CommonTSyntheseRapportAuditPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTSyntheseRapportAudit|CommonTSyntheseRapportAudit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTSyntheseRapportAudit[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTSyntheseRapportAuditPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTSyntheseRapportAuditPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ID, $id, $comparison);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::FICHIER, $fichier, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::HORODATAGE, $horodatage, $comparison);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
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
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the annee column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee('fooValue');   // WHERE annee = 'fooValue'
     * $query->filterByAnnee('%fooValue%'); // WHERE annee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annee)) {
                $annee = str_replace('*', '%', $annee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::ANNEE, $annee, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSyntheseRapportAuditPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTSyntheseRapportAudit $commonTSyntheseRapportAudit Object to remove from the list of results
     *
     * @return CommonTSyntheseRapportAuditQuery The current query, for fluid interface
     */
    public function prune($commonTSyntheseRapportAudit = null)
    {
        if ($commonTSyntheseRapportAudit) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTSyntheseRapportAuditPeer::ID), $commonTSyntheseRapportAudit->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTSyntheseRapportAuditPeer::ORGANISME), $commonTSyntheseRapportAudit->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
