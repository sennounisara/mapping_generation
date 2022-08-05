<?php


/**
 * Base class that represents a query for the 'programme_previsionnel' table.
 *
 * 
 *
 * @method CommonProgrammePrevisionnelQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonProgrammePrevisionnelQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonProgrammePrevisionnelQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonProgrammePrevisionnelQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonProgrammePrevisionnelQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonProgrammePrevisionnelQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonProgrammePrevisionnelQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonProgrammePrevisionnelQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonProgrammePrevisionnelQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonProgrammePrevisionnelQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonProgrammePrevisionnelQuery orderByAfficher($order = Criteria::ASC) Order by the afficher column
 *
 * @method CommonProgrammePrevisionnelQuery groupById() Group by the id column
 * @method CommonProgrammePrevisionnelQuery groupByOrganisme() Group by the organisme column
 * @method CommonProgrammePrevisionnelQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonProgrammePrevisionnelQuery groupByFichier() Group by the fichier column
 * @method CommonProgrammePrevisionnelQuery groupByDate() Group by the date column
 * @method CommonProgrammePrevisionnelQuery groupByHorodatage() Group by the horodatage column
 * @method CommonProgrammePrevisionnelQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonProgrammePrevisionnelQuery groupByTaille() Group by the taille column
 * @method CommonProgrammePrevisionnelQuery groupByAnnee() Group by the annee column
 * @method CommonProgrammePrevisionnelQuery groupByServiceId() Group by the service_id column
 * @method CommonProgrammePrevisionnelQuery groupByAfficher() Group by the afficher column
 *
 * @method CommonProgrammePrevisionnelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonProgrammePrevisionnelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonProgrammePrevisionnelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonProgrammePrevisionnel findOne(PropelPDO $con = null) Return the first CommonProgrammePrevisionnel matching the query
 * @method CommonProgrammePrevisionnel findOneOrCreate(PropelPDO $con = null) Return the first CommonProgrammePrevisionnel matching the query, or a new CommonProgrammePrevisionnel object populated from the query conditions when no match is found
 *
 * @method CommonProgrammePrevisionnel findOneById(int $id) Return the first CommonProgrammePrevisionnel filtered by the id column
 * @method CommonProgrammePrevisionnel findOneByOrganisme(string $organisme) Return the first CommonProgrammePrevisionnel filtered by the organisme column
 * @method CommonProgrammePrevisionnel findOneByNomFichier(string $nom_fichier) Return the first CommonProgrammePrevisionnel filtered by the nom_fichier column
 * @method CommonProgrammePrevisionnel findOneByFichier(string $fichier) Return the first CommonProgrammePrevisionnel filtered by the fichier column
 * @method CommonProgrammePrevisionnel findOneByDate(string $date) Return the first CommonProgrammePrevisionnel filtered by the date column
 * @method CommonProgrammePrevisionnel findOneByHorodatage(resource $horodatage) Return the first CommonProgrammePrevisionnel filtered by the horodatage column
 * @method CommonProgrammePrevisionnel findOneByUntrusteddate(string $untrusteddate) Return the first CommonProgrammePrevisionnel filtered by the untrusteddate column
 * @method CommonProgrammePrevisionnel findOneByTaille(int $taille) Return the first CommonProgrammePrevisionnel filtered by the taille column
 * @method CommonProgrammePrevisionnel findOneByAnnee(string $annee) Return the first CommonProgrammePrevisionnel filtered by the annee column
 * @method CommonProgrammePrevisionnel findOneByServiceId(int $service_id) Return the first CommonProgrammePrevisionnel filtered by the service_id column
 * @method CommonProgrammePrevisionnel findOneByAfficher(string $afficher) Return the first CommonProgrammePrevisionnel filtered by the afficher column
 *
 * @method array findById(int $id) Return CommonProgrammePrevisionnel objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonProgrammePrevisionnel objects filtered by the organisme column
 * @method array findByNomFichier(string $nom_fichier) Return CommonProgrammePrevisionnel objects filtered by the nom_fichier column
 * @method array findByFichier(string $fichier) Return CommonProgrammePrevisionnel objects filtered by the fichier column
 * @method array findByDate(string $date) Return CommonProgrammePrevisionnel objects filtered by the date column
 * @method array findByHorodatage(resource $horodatage) Return CommonProgrammePrevisionnel objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonProgrammePrevisionnel objects filtered by the untrusteddate column
 * @method array findByTaille(int $taille) Return CommonProgrammePrevisionnel objects filtered by the taille column
 * @method array findByAnnee(string $annee) Return CommonProgrammePrevisionnel objects filtered by the annee column
 * @method array findByServiceId(int $service_id) Return CommonProgrammePrevisionnel objects filtered by the service_id column
 * @method array findByAfficher(string $afficher) Return CommonProgrammePrevisionnel objects filtered by the afficher column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonProgrammePrevisionnelQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonProgrammePrevisionnelQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonProgrammePrevisionnel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonProgrammePrevisionnelQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonProgrammePrevisionnelQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonProgrammePrevisionnelQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonProgrammePrevisionnelQuery) {
            return $criteria;
        }
        $query = new CommonProgrammePrevisionnelQuery();
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
     * @return   CommonProgrammePrevisionnel|CommonProgrammePrevisionnel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonProgrammePrevisionnelPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonProgrammePrevisionnelPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonProgrammePrevisionnel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom_fichier`, `fichier`, `date`, `horodatage`, `untrusteddate`, `taille`, `annee`, `service_id`, `afficher` FROM `programme_previsionnel` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonProgrammePrevisionnel();
            $obj->hydrate($row);
            CommonProgrammePrevisionnelPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonProgrammePrevisionnel|CommonProgrammePrevisionnel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonProgrammePrevisionnel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonProgrammePrevisionnelPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonProgrammePrevisionnelPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ID, $id, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::FICHIER, $fichier, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::HORODATAGE, $horodatage, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::TAILLE, $taille, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::ANNEE, $annee, $comparison);
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
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonProgrammePrevisionnelPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the afficher column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficher('fooValue');   // WHERE afficher = 'fooValue'
     * $query->filterByAfficher('%fooValue%'); // WHERE afficher LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficher The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function filterByAfficher($afficher = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficher)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficher)) {
                $afficher = str_replace('*', '%', $afficher);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonProgrammePrevisionnelPeer::AFFICHER, $afficher, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonProgrammePrevisionnel $commonProgrammePrevisionnel Object to remove from the list of results
     *
     * @return CommonProgrammePrevisionnelQuery The current query, for fluid interface
     */
    public function prune($commonProgrammePrevisionnel = null)
    {
        if ($commonProgrammePrevisionnel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonProgrammePrevisionnelPeer::ID), $commonProgrammePrevisionnel->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonProgrammePrevisionnelPeer::ORGANISME), $commonProgrammePrevisionnel->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
