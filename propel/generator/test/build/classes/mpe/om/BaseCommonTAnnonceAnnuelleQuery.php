<?php


/**
 * Base class that represents a query for the 't_annonce_annuelle' table.
 *
 * 
 *
 * @method CommonTAnnonceAnnuelleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTAnnonceAnnuelleQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTAnnonceAnnuelleQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonTAnnonceAnnuelleQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonTAnnonceAnnuelleQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonTAnnonceAnnuelleQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonTAnnonceAnnuelleQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonTAnnonceAnnuelleQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonTAnnonceAnnuelleQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonTAnnonceAnnuelleQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonTAnnonceAnnuelleQuery orderByIdType($order = Criteria::ASC) Order by the id_type column
 *
 * @method CommonTAnnonceAnnuelleQuery groupById() Group by the id column
 * @method CommonTAnnonceAnnuelleQuery groupByOrganisme() Group by the organisme column
 * @method CommonTAnnonceAnnuelleQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonTAnnonceAnnuelleQuery groupByFichier() Group by the fichier column
 * @method CommonTAnnonceAnnuelleQuery groupByDate() Group by the date column
 * @method CommonTAnnonceAnnuelleQuery groupByHorodatage() Group by the horodatage column
 * @method CommonTAnnonceAnnuelleQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonTAnnonceAnnuelleQuery groupByTaille() Group by the taille column
 * @method CommonTAnnonceAnnuelleQuery groupByAnnee() Group by the annee column
 * @method CommonTAnnonceAnnuelleQuery groupByServiceId() Group by the service_id column
 * @method CommonTAnnonceAnnuelleQuery groupByIdType() Group by the id_type column
 *
 * @method CommonTAnnonceAnnuelleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTAnnonceAnnuelleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTAnnonceAnnuelleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTAnnonceAnnuelle findOne(PropelPDO $con = null) Return the first CommonTAnnonceAnnuelle matching the query
 * @method CommonTAnnonceAnnuelle findOneOrCreate(PropelPDO $con = null) Return the first CommonTAnnonceAnnuelle matching the query, or a new CommonTAnnonceAnnuelle object populated from the query conditions when no match is found
 *
 * @method CommonTAnnonceAnnuelle findOneByOrganisme(string $organisme) Return the first CommonTAnnonceAnnuelle filtered by the organisme column
 * @method CommonTAnnonceAnnuelle findOneByNomFichier(string $nom_fichier) Return the first CommonTAnnonceAnnuelle filtered by the nom_fichier column
 * @method CommonTAnnonceAnnuelle findOneByFichier(string $fichier) Return the first CommonTAnnonceAnnuelle filtered by the fichier column
 * @method CommonTAnnonceAnnuelle findOneByDate(string $date) Return the first CommonTAnnonceAnnuelle filtered by the date column
 * @method CommonTAnnonceAnnuelle findOneByHorodatage(resource $horodatage) Return the first CommonTAnnonceAnnuelle filtered by the horodatage column
 * @method CommonTAnnonceAnnuelle findOneByUntrusteddate(string $untrusteddate) Return the first CommonTAnnonceAnnuelle filtered by the untrusteddate column
 * @method CommonTAnnonceAnnuelle findOneByTaille(int $taille) Return the first CommonTAnnonceAnnuelle filtered by the taille column
 * @method CommonTAnnonceAnnuelle findOneByAnnee(string $annee) Return the first CommonTAnnonceAnnuelle filtered by the annee column
 * @method CommonTAnnonceAnnuelle findOneByServiceId(int $service_id) Return the first CommonTAnnonceAnnuelle filtered by the service_id column
 * @method CommonTAnnonceAnnuelle findOneByIdType(int $id_type) Return the first CommonTAnnonceAnnuelle filtered by the id_type column
 *
 * @method array findById(int $id) Return CommonTAnnonceAnnuelle objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonTAnnonceAnnuelle objects filtered by the organisme column
 * @method array findByNomFichier(string $nom_fichier) Return CommonTAnnonceAnnuelle objects filtered by the nom_fichier column
 * @method array findByFichier(string $fichier) Return CommonTAnnonceAnnuelle objects filtered by the fichier column
 * @method array findByDate(string $date) Return CommonTAnnonceAnnuelle objects filtered by the date column
 * @method array findByHorodatage(resource $horodatage) Return CommonTAnnonceAnnuelle objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonTAnnonceAnnuelle objects filtered by the untrusteddate column
 * @method array findByTaille(int $taille) Return CommonTAnnonceAnnuelle objects filtered by the taille column
 * @method array findByAnnee(string $annee) Return CommonTAnnonceAnnuelle objects filtered by the annee column
 * @method array findByServiceId(int $service_id) Return CommonTAnnonceAnnuelle objects filtered by the service_id column
 * @method array findByIdType(int $id_type) Return CommonTAnnonceAnnuelle objects filtered by the id_type column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTAnnonceAnnuelleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTAnnonceAnnuelleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTAnnonceAnnuelle', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTAnnonceAnnuelleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTAnnonceAnnuelleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTAnnonceAnnuelleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTAnnonceAnnuelleQuery) {
            return $criteria;
        }
        $query = new CommonTAnnonceAnnuelleQuery();
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
     * @return   CommonTAnnonceAnnuelle|CommonTAnnonceAnnuelle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTAnnonceAnnuellePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTAnnonceAnnuellePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTAnnonceAnnuelle A model object, or null if the key is not found
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
     * @return                 CommonTAnnonceAnnuelle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom_fichier`, `fichier`, `date`, `horodatage`, `untrusteddate`, `taille`, `annee`, `service_id`, `id_type` FROM `t_annonce_annuelle` WHERE `id` = :p0';
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
            $obj = new CommonTAnnonceAnnuelle();
            $obj->hydrate($row);
            CommonTAnnonceAnnuellePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTAnnonceAnnuelle|CommonTAnnonceAnnuelle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTAnnonceAnnuelle[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $id, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::FICHIER, $fichier, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::HORODATAGE, $horodatage, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::TAILLE, $taille, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ANNEE, $annee, $comparison);
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
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the id_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdType(1234); // WHERE id_type = 1234
     * $query->filterByIdType(array(12, 34)); // WHERE id_type IN (12, 34)
     * $query->filterByIdType(array('min' => 12)); // WHERE id_type >= 12
     * $query->filterByIdType(array('max' => 12)); // WHERE id_type <= 12
     * </code>
     *
     * @param     mixed $idType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function filterByIdType($idType = null, $comparison = null)
    {
        if (is_array($idType)) {
            $useMinMax = false;
            if (isset($idType['min'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID_TYPE, $idType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idType['max'])) {
                $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID_TYPE, $idType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID_TYPE, $idType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTAnnonceAnnuelle $commonTAnnonceAnnuelle Object to remove from the list of results
     *
     * @return CommonTAnnonceAnnuelleQuery The current query, for fluid interface
     */
    public function prune($commonTAnnonceAnnuelle = null)
    {
        if ($commonTAnnonceAnnuelle) {
            $this->addUsingAlias(CommonTAnnonceAnnuellePeer::ID, $commonTAnnonceAnnuelle->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
