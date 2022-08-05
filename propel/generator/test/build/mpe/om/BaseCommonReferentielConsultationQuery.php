<?php


/**
 * Base class that represents a query for the 'Referentiel_Consultation' table.
 *
 * 
 *
 * @method CommonReferentielConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielConsultationQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonReferentielConsultationQuery orderByIdLtReferentiel($order = Criteria::ASC) Order by the id_Lt_Referentiel column
 * @method CommonReferentielConsultationQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonReferentielConsultationQuery orderByValeurPrincipaleLtReferentiel($order = Criteria::ASC) Order by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielConsultationQuery orderByValeurSecondaireLtReferentiel($order = Criteria::ASC) Order by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielConsultationQuery groupById() Group by the id column
 * @method CommonReferentielConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielConsultationQuery groupByReference() Group by the reference column
 * @method CommonReferentielConsultationQuery groupByIdLtReferentiel() Group by the id_Lt_Referentiel column
 * @method CommonReferentielConsultationQuery groupByLot() Group by the lot column
 * @method CommonReferentielConsultationQuery groupByValeurPrincipaleLtReferentiel() Group by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielConsultationQuery groupByValeurSecondaireLtReferentiel() Group by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielConsultation findOne(PropelPDO $con = null) Return the first CommonReferentielConsultation matching the query
 * @method CommonReferentielConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielConsultation matching the query, or a new CommonReferentielConsultation object populated from the query conditions when no match is found
 *
 * @method CommonReferentielConsultation findOneByOrganisme(string $organisme) Return the first CommonReferentielConsultation filtered by the organisme column
 * @method CommonReferentielConsultation findOneByReference(int $reference) Return the first CommonReferentielConsultation filtered by the reference column
 * @method CommonReferentielConsultation findOneByIdLtReferentiel(int $id_Lt_Referentiel) Return the first CommonReferentielConsultation filtered by the id_Lt_Referentiel column
 * @method CommonReferentielConsultation findOneByLot(int $lot) Return the first CommonReferentielConsultation filtered by the lot column
 * @method CommonReferentielConsultation findOneByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return the first CommonReferentielConsultation filtered by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielConsultation findOneByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return the first CommonReferentielConsultation filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method array findById(int $id) Return CommonReferentielConsultation objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielConsultation objects filtered by the organisme column
 * @method array findByReference(int $reference) Return CommonReferentielConsultation objects filtered by the reference column
 * @method array findByIdLtReferentiel(int $id_Lt_Referentiel) Return CommonReferentielConsultation objects filtered by the id_Lt_Referentiel column
 * @method array findByLot(int $lot) Return CommonReferentielConsultation objects filtered by the lot column
 * @method array findByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return CommonReferentielConsultation objects filtered by the valeur_Principale_Lt_Referentiel column
 * @method array findByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return CommonReferentielConsultation objects filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielConsultationQuery) {
            return $criteria;
        }
        $query = new CommonReferentielConsultationQuery();
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
     * @return   CommonReferentielConsultation|CommonReferentielConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielConsultation A model object, or null if the key is not found
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
     * @return                 CommonReferentielConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `reference`, `id_Lt_Referentiel`, `lot`, `valeur_Principale_Lt_Referentiel`, `valeur_Secondaire_Lt_Referentiel` FROM `Referentiel_Consultation` WHERE `id` = :p0';
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
            $obj = new CommonReferentielConsultation();
            $obj->hydrate($row);
            CommonReferentielConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentielConsultation|CommonReferentielConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $id, $comparison);
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
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the id_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLtReferentiel(1234); // WHERE id_Lt_Referentiel = 1234
     * $query->filterByIdLtReferentiel(array(12, 34)); // WHERE id_Lt_Referentiel IN (12, 34)
     * $query->filterByIdLtReferentiel(array('min' => 12)); // WHERE id_Lt_Referentiel >= 12
     * $query->filterByIdLtReferentiel(array('max' => 12)); // WHERE id_Lt_Referentiel <= 12
     * </code>
     *
     * @param     mixed $idLtReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByIdLtReferentiel($idLtReferentiel = null, $comparison = null)
    {
        if (is_array($idLtReferentiel)) {
            $useMinMax = false;
            if (isset($idLtReferentiel['min'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::ID_LT_REFERENTIEL, $idLtReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLtReferentiel['max'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::ID_LT_REFERENTIEL, $idLtReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::ID_LT_REFERENTIEL, $idLtReferentiel, $comparison);
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
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonReferentielConsultationPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the valeur_Principale_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurPrincipaleLtReferentiel('fooValue');   // WHERE valeur_Principale_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurPrincipaleLtReferentiel('%fooValue%'); // WHERE valeur_Principale_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurPrincipaleLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByValeurPrincipaleLtReferentiel($valeurPrincipaleLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurPrincipaleLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurPrincipaleLtReferentiel)) {
                $valeurPrincipaleLtReferentiel = str_replace('*', '%', $valeurPrincipaleLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::VALEUR_PRINCIPALE_LT_REFERENTIEL, $valeurPrincipaleLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the valeur_Secondaire_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurSecondaireLtReferentiel('fooValue');   // WHERE valeur_Secondaire_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurSecondaireLtReferentiel('%fooValue%'); // WHERE valeur_Secondaire_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurSecondaireLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function filterByValeurSecondaireLtReferentiel($valeurSecondaireLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurSecondaireLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurSecondaireLtReferentiel)) {
                $valeurSecondaireLtReferentiel = str_replace('*', '%', $valeurSecondaireLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielConsultationPeer::VALEUR_SECONDAIRE_LT_REFERENTIEL, $valeurSecondaireLtReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielConsultation $commonReferentielConsultation Object to remove from the list of results
     *
     * @return CommonReferentielConsultationQuery The current query, for fluid interface
     */
    public function prune($commonReferentielConsultation = null)
    {
        if ($commonReferentielConsultation) {
            $this->addUsingAlias(CommonReferentielConsultationPeer::ID, $commonReferentielConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
