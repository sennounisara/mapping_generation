<?php


/**
 * Base class that represents a query for the 't_candidature_mps' table.
 *
 * 
 *
 * @method CommonTCandidatureMpsQuery orderByIdCandidature($order = Criteria::ASC) Order by the id_candidature column
 * @method CommonTCandidatureMpsQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonTCandidatureMpsQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonTCandidatureMpsQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonTCandidatureMpsQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCandidatureMpsQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonTCandidatureMpsQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonTCandidatureMpsQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonTCandidatureMpsQuery orderByUntrustedDate($order = Criteria::ASC) Order by the untrusted_date column
 * @method CommonTCandidatureMpsQuery orderByUntrustedSerial($order = Criteria::ASC) Order by the untrusted_serial column
 * @method CommonTCandidatureMpsQuery orderByTailleFichier($order = Criteria::ASC) Order by the taille_fichier column
 *
 * @method CommonTCandidatureMpsQuery groupByIdCandidature() Group by the id_candidature column
 * @method CommonTCandidatureMpsQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonTCandidatureMpsQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonTCandidatureMpsQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonTCandidatureMpsQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCandidatureMpsQuery groupByIdOffre() Group by the id_offre column
 * @method CommonTCandidatureMpsQuery groupByIdBlob() Group by the id_blob column
 * @method CommonTCandidatureMpsQuery groupByHorodatage() Group by the horodatage column
 * @method CommonTCandidatureMpsQuery groupByUntrustedDate() Group by the untrusted_date column
 * @method CommonTCandidatureMpsQuery groupByUntrustedSerial() Group by the untrusted_serial column
 * @method CommonTCandidatureMpsQuery groupByTailleFichier() Group by the taille_fichier column
 *
 * @method CommonTCandidatureMpsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCandidatureMpsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCandidatureMpsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCandidatureMps findOne(PropelPDO $con = null) Return the first CommonTCandidatureMps matching the query
 * @method CommonTCandidatureMps findOneOrCreate(PropelPDO $con = null) Return the first CommonTCandidatureMps matching the query, or a new CommonTCandidatureMps object populated from the query conditions when no match is found
 *
 * @method CommonTCandidatureMps findOneByIdEntreprise(int $id_entreprise) Return the first CommonTCandidatureMps filtered by the id_entreprise column
 * @method CommonTCandidatureMps findOneByIdInscrit(int $id_inscrit) Return the first CommonTCandidatureMps filtered by the id_inscrit column
 * @method CommonTCandidatureMps findOneByRefConsultation(int $ref_consultation) Return the first CommonTCandidatureMps filtered by the ref_consultation column
 * @method CommonTCandidatureMps findOneByOrganisme(string $organisme) Return the first CommonTCandidatureMps filtered by the organisme column
 * @method CommonTCandidatureMps findOneByIdOffre(int $id_offre) Return the first CommonTCandidatureMps filtered by the id_offre column
 * @method CommonTCandidatureMps findOneByIdBlob(int $id_blob) Return the first CommonTCandidatureMps filtered by the id_blob column
 * @method CommonTCandidatureMps findOneByHorodatage(resource $horodatage) Return the first CommonTCandidatureMps filtered by the horodatage column
 * @method CommonTCandidatureMps findOneByUntrustedDate(string $untrusted_date) Return the first CommonTCandidatureMps filtered by the untrusted_date column
 * @method CommonTCandidatureMps findOneByUntrustedSerial(string $untrusted_serial) Return the first CommonTCandidatureMps filtered by the untrusted_serial column
 * @method CommonTCandidatureMps findOneByTailleFichier(int $taille_fichier) Return the first CommonTCandidatureMps filtered by the taille_fichier column
 *
 * @method array findByIdCandidature(int $id_candidature) Return CommonTCandidatureMps objects filtered by the id_candidature column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonTCandidatureMps objects filtered by the id_entreprise column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonTCandidatureMps objects filtered by the id_inscrit column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonTCandidatureMps objects filtered by the ref_consultation column
 * @method array findByOrganisme(string $organisme) Return CommonTCandidatureMps objects filtered by the organisme column
 * @method array findByIdOffre(int $id_offre) Return CommonTCandidatureMps objects filtered by the id_offre column
 * @method array findByIdBlob(int $id_blob) Return CommonTCandidatureMps objects filtered by the id_blob column
 * @method array findByHorodatage(resource $horodatage) Return CommonTCandidatureMps objects filtered by the horodatage column
 * @method array findByUntrustedDate(string $untrusted_date) Return CommonTCandidatureMps objects filtered by the untrusted_date column
 * @method array findByUntrustedSerial(string $untrusted_serial) Return CommonTCandidatureMps objects filtered by the untrusted_serial column
 * @method array findByTailleFichier(int $taille_fichier) Return CommonTCandidatureMps objects filtered by the taille_fichier column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCandidatureMpsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCandidatureMpsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCandidatureMps', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCandidatureMpsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCandidatureMpsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCandidatureMpsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCandidatureMpsQuery) {
            return $criteria;
        }
        $query = new CommonTCandidatureMpsQuery();
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
     * @return   CommonTCandidatureMps|CommonTCandidatureMps[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCandidatureMpsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCandidatureMpsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCandidatureMps A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCandidature($key, $con = null)
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
     * @return                 CommonTCandidatureMps A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_candidature`, `id_entreprise`, `id_inscrit`, `ref_consultation`, `organisme`, `id_offre`, `id_blob`, `horodatage`, `untrusted_date`, `untrusted_serial`, `taille_fichier` FROM `t_candidature_mps` WHERE `id_candidature` = :p0';
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
            $obj = new CommonTCandidatureMps();
            $obj->hydrate($row);
            CommonTCandidatureMpsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCandidatureMps|CommonTCandidatureMps[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCandidatureMps[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCandidature(1234); // WHERE id_candidature = 1234
     * $query->filterByIdCandidature(array(12, 34)); // WHERE id_candidature IN (12, 34)
     * $query->filterByIdCandidature(array('min' => 12)); // WHERE id_candidature >= 12
     * $query->filterByIdCandidature(array('max' => 12)); // WHERE id_candidature <= 12
     * </code>
     *
     * @param     mixed $idCandidature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByIdCandidature($idCandidature = null, $comparison = null)
    {
        if (is_array($idCandidature)) {
            $useMinMax = false;
            if (isset($idCandidature['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $idCandidature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCandidature['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $idCandidature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $idCandidature, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE ref_consultation = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE ref_consultation IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE ref_consultation >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE ref_consultation <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::REF_CONSULTATION, $refConsultation, $comparison);
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
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusted_date column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrustedDate('2011-03-14'); // WHERE untrusted_date = '2011-03-14'
     * $query->filterByUntrustedDate('now'); // WHERE untrusted_date = '2011-03-14'
     * $query->filterByUntrustedDate(array('max' => 'yesterday')); // WHERE untrusted_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrustedDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByUntrustedDate($untrustedDate = null, $comparison = null)
    {
        if (is_array($untrustedDate)) {
            $useMinMax = false;
            if (isset($untrustedDate['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::UNTRUSTED_DATE, $untrustedDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrustedDate['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::UNTRUSTED_DATE, $untrustedDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::UNTRUSTED_DATE, $untrustedDate, $comparison);
    }

    /**
     * Filter the query on the untrusted_serial column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrustedSerial('fooValue');   // WHERE untrusted_serial = 'fooValue'
     * $query->filterByUntrustedSerial('%fooValue%'); // WHERE untrusted_serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrustedSerial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByUntrustedSerial($untrustedSerial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrustedSerial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrustedSerial)) {
                $untrustedSerial = str_replace('*', '%', $untrustedSerial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::UNTRUSTED_SERIAL, $untrustedSerial, $comparison);
    }

    /**
     * Filter the query on the taille_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleFichier(1234); // WHERE taille_fichier = 1234
     * $query->filterByTailleFichier(array(12, 34)); // WHERE taille_fichier IN (12, 34)
     * $query->filterByTailleFichier(array('min' => 12)); // WHERE taille_fichier >= 12
     * $query->filterByTailleFichier(array('max' => 12)); // WHERE taille_fichier <= 12
     * </code>
     *
     * @param     mixed $tailleFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function filterByTailleFichier($tailleFichier = null, $comparison = null)
    {
        if (is_array($tailleFichier)) {
            $useMinMax = false;
            if (isset($tailleFichier['min'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::TAILLE_FICHIER, $tailleFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tailleFichier['max'])) {
                $this->addUsingAlias(CommonTCandidatureMpsPeer::TAILLE_FICHIER, $tailleFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCandidatureMpsPeer::TAILLE_FICHIER, $tailleFichier, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCandidatureMps $commonTCandidatureMps Object to remove from the list of results
     *
     * @return CommonTCandidatureMpsQuery The current query, for fluid interface
     */
    public function prune($commonTCandidatureMps = null)
    {
        if ($commonTCandidatureMps) {
            $this->addUsingAlias(CommonTCandidatureMpsPeer::ID_CANDIDATURE, $commonTCandidatureMps->getIdCandidature(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
