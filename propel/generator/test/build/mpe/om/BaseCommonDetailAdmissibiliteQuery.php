<?php


/**
 * Base class that represents a query for the 'detail_admissibilite' table.
 *
 * 
 *
 * @method CommonDetailAdmissibiliteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDetailAdmissibiliteQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDetailAdmissibiliteQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDetailAdmissibiliteQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonDetailAdmissibiliteQuery orderByIdEnv($order = Criteria::ASC) Order by the id_env column
 * @method CommonDetailAdmissibiliteQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonDetailAdmissibiliteQuery orderByAdmissibilite($order = Criteria::ASC) Order by the admissibilite column
 * @method CommonDetailAdmissibiliteQuery orderByReserve($order = Criteria::ASC) Order by the reserve column
 * @method CommonDetailAdmissibiliteQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonDetailAdmissibiliteQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonDetailAdmissibiliteQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonDetailAdmissibiliteQuery orderByTypeOffre($order = Criteria::ASC) Order by the type_offre column
 *
 * @method CommonDetailAdmissibiliteQuery groupById() Group by the id column
 * @method CommonDetailAdmissibiliteQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDetailAdmissibiliteQuery groupByOrganisme() Group by the organisme column
 * @method CommonDetailAdmissibiliteQuery groupByIdOffre() Group by the id_offre column
 * @method CommonDetailAdmissibiliteQuery groupByIdEnv() Group by the id_env column
 * @method CommonDetailAdmissibiliteQuery groupByType() Group by the type column
 * @method CommonDetailAdmissibiliteQuery groupByAdmissibilite() Group by the admissibilite column
 * @method CommonDetailAdmissibiliteQuery groupByReserve() Group by the reserve column
 * @method CommonDetailAdmissibiliteQuery groupByCommentaire() Group by the commentaire column
 * @method CommonDetailAdmissibiliteQuery groupByIdSeance() Group by the id_seance column
 * @method CommonDetailAdmissibiliteQuery groupByLot() Group by the lot column
 * @method CommonDetailAdmissibiliteQuery groupByTypeOffre() Group by the type_offre column
 *
 * @method CommonDetailAdmissibiliteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDetailAdmissibiliteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDetailAdmissibiliteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDetailAdmissibilite findOne(PropelPDO $con = null) Return the first CommonDetailAdmissibilite matching the query
 * @method CommonDetailAdmissibilite findOneOrCreate(PropelPDO $con = null) Return the first CommonDetailAdmissibilite matching the query, or a new CommonDetailAdmissibilite object populated from the query conditions when no match is found
 *
 * @method CommonDetailAdmissibilite findOneByConsultationRef(int $consultation_ref) Return the first CommonDetailAdmissibilite filtered by the consultation_ref column
 * @method CommonDetailAdmissibilite findOneByOrganisme(string $organisme) Return the first CommonDetailAdmissibilite filtered by the organisme column
 * @method CommonDetailAdmissibilite findOneByIdOffre(int $id_offre) Return the first CommonDetailAdmissibilite filtered by the id_offre column
 * @method CommonDetailAdmissibilite findOneByIdEnv(int $id_env) Return the first CommonDetailAdmissibilite filtered by the id_env column
 * @method CommonDetailAdmissibilite findOneByType(string $type) Return the first CommonDetailAdmissibilite filtered by the type column
 * @method CommonDetailAdmissibilite findOneByAdmissibilite(string $admissibilite) Return the first CommonDetailAdmissibilite filtered by the admissibilite column
 * @method CommonDetailAdmissibilite findOneByReserve(string $reserve) Return the first CommonDetailAdmissibilite filtered by the reserve column
 * @method CommonDetailAdmissibilite findOneByCommentaire(string $commentaire) Return the first CommonDetailAdmissibilite filtered by the commentaire column
 * @method CommonDetailAdmissibilite findOneByIdSeance(int $id_seance) Return the first CommonDetailAdmissibilite filtered by the id_seance column
 * @method CommonDetailAdmissibilite findOneByLot(int $lot) Return the first CommonDetailAdmissibilite filtered by the lot column
 * @method CommonDetailAdmissibilite findOneByTypeOffre(string $type_offre) Return the first CommonDetailAdmissibilite filtered by the type_offre column
 *
 * @method array findById(int $id) Return CommonDetailAdmissibilite objects filtered by the id column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDetailAdmissibilite objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return CommonDetailAdmissibilite objects filtered by the organisme column
 * @method array findByIdOffre(int $id_offre) Return CommonDetailAdmissibilite objects filtered by the id_offre column
 * @method array findByIdEnv(int $id_env) Return CommonDetailAdmissibilite objects filtered by the id_env column
 * @method array findByType(string $type) Return CommonDetailAdmissibilite objects filtered by the type column
 * @method array findByAdmissibilite(string $admissibilite) Return CommonDetailAdmissibilite objects filtered by the admissibilite column
 * @method array findByReserve(string $reserve) Return CommonDetailAdmissibilite objects filtered by the reserve column
 * @method array findByCommentaire(string $commentaire) Return CommonDetailAdmissibilite objects filtered by the commentaire column
 * @method array findByIdSeance(int $id_seance) Return CommonDetailAdmissibilite objects filtered by the id_seance column
 * @method array findByLot(int $lot) Return CommonDetailAdmissibilite objects filtered by the lot column
 * @method array findByTypeOffre(string $type_offre) Return CommonDetailAdmissibilite objects filtered by the type_offre column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDetailAdmissibiliteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDetailAdmissibiliteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDetailAdmissibilite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDetailAdmissibiliteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDetailAdmissibiliteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDetailAdmissibiliteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDetailAdmissibiliteQuery) {
            return $criteria;
        }
        $query = new CommonDetailAdmissibiliteQuery();
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
     * @return   CommonDetailAdmissibilite|CommonDetailAdmissibilite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDetailAdmissibilitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDetailAdmissibilitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDetailAdmissibilite A model object, or null if the key is not found
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
     * @return                 CommonDetailAdmissibilite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `consultation_ref`, `organisme`, `id_offre`, `id_env`, `type`, `admissibilite`, `reserve`, `commentaire`, `id_seance`, `lot`, `type_offre` FROM `detail_admissibilite` WHERE `id` = :p0';
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
            $obj = new CommonDetailAdmissibilite();
            $obj->hydrate($row);
            CommonDetailAdmissibilitePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDetailAdmissibilite|CommonDetailAdmissibilite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDetailAdmissibilite[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $keys, Criteria::IN);
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
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the id_env column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnv(1234); // WHERE id_env = 1234
     * $query->filterByIdEnv(array(12, 34)); // WHERE id_env IN (12, 34)
     * $query->filterByIdEnv(array('min' => 12)); // WHERE id_env >= 12
     * $query->filterByIdEnv(array('max' => 12)); // WHERE id_env <= 12
     * </code>
     *
     * @param     mixed $idEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByIdEnv($idEnv = null, $comparison = null)
    {
        if (is_array($idEnv)) {
            $useMinMax = false;
            if (isset($idEnv['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_ENV, $idEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnv['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_ENV, $idEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_ENV, $idEnv, $comparison);
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
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the admissibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmissibilite('fooValue');   // WHERE admissibilite = 'fooValue'
     * $query->filterByAdmissibilite('%fooValue%'); // WHERE admissibilite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $admissibilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByAdmissibilite($admissibilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($admissibilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $admissibilite)) {
                $admissibilite = str_replace('*', '%', $admissibilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ADMISSIBILITE, $admissibilite, $comparison);
    }

    /**
     * Filter the query on the reserve column
     *
     * Example usage:
     * <code>
     * $query->filterByReserve('fooValue');   // WHERE reserve = 'fooValue'
     * $query->filterByReserve('%fooValue%'); // WHERE reserve LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reserve The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByReserve($reserve = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reserve)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reserve)) {
                $reserve = str_replace('*', '%', $reserve);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::RESERVE, $reserve, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID_SEANCE, $idSeance, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDetailAdmissibilitePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the type_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeOffre('fooValue');   // WHERE type_offre = 'fooValue'
     * $query->filterByTypeOffre('%fooValue%'); // WHERE type_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function filterByTypeOffre($typeOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeOffre)) {
                $typeOffre = str_replace('*', '%', $typeOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDetailAdmissibilitePeer::TYPE_OFFRE, $typeOffre, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDetailAdmissibilite $commonDetailAdmissibilite Object to remove from the list of results
     *
     * @return CommonDetailAdmissibiliteQuery The current query, for fluid interface
     */
    public function prune($commonDetailAdmissibilite = null)
    {
        if ($commonDetailAdmissibilite) {
            $this->addUsingAlias(CommonDetailAdmissibilitePeer::ID, $commonDetailAdmissibilite->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
