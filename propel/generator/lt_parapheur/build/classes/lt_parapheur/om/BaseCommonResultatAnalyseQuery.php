<?php


/**
 * Base class that represents a query for the 'resultat_analyse' table.
 *
 * 
 *
 * @method CommonResultatAnalyseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonResultatAnalyseQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonResultatAnalyseQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonResultatAnalyseQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonResultatAnalyseQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonResultatAnalyseQuery orderByMontantOffre($order = Criteria::ASC) Order by the montant_offre column
 * @method CommonResultatAnalyseQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method CommonResultatAnalyseQuery orderByClassement($order = Criteria::ASC) Order by the classement column
 * @method CommonResultatAnalyseQuery orderByObservation($order = Criteria::ASC) Order by the observation column
 * @method CommonResultatAnalyseQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonResultatAnalyseQuery orderByOffreVariante($order = Criteria::ASC) Order by the offre_variante column
 *
 * @method CommonResultatAnalyseQuery groupById() Group by the id column
 * @method CommonResultatAnalyseQuery groupByOrganisme() Group by the organisme column
 * @method CommonResultatAnalyseQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonResultatAnalyseQuery groupByIdOffre() Group by the id_offre column
 * @method CommonResultatAnalyseQuery groupByLot() Group by the lot column
 * @method CommonResultatAnalyseQuery groupByMontantOffre() Group by the montant_offre column
 * @method CommonResultatAnalyseQuery groupByNote() Group by the note column
 * @method CommonResultatAnalyseQuery groupByClassement() Group by the classement column
 * @method CommonResultatAnalyseQuery groupByObservation() Group by the observation column
 * @method CommonResultatAnalyseQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonResultatAnalyseQuery groupByOffreVariante() Group by the offre_variante column
 *
 * @method CommonResultatAnalyseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonResultatAnalyseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonResultatAnalyseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonResultatAnalyse findOne(PropelPDO $con = null) Return the first CommonResultatAnalyse matching the query
 * @method CommonResultatAnalyse findOneOrCreate(PropelPDO $con = null) Return the first CommonResultatAnalyse matching the query, or a new CommonResultatAnalyse object populated from the query conditions when no match is found
 *
 * @method CommonResultatAnalyse findOneById(int $id) Return the first CommonResultatAnalyse filtered by the id column
 * @method CommonResultatAnalyse findOneByOrganisme(string $organisme) Return the first CommonResultatAnalyse filtered by the organisme column
 * @method CommonResultatAnalyse findOneByConsultationRef(int $consultation_ref) Return the first CommonResultatAnalyse filtered by the consultation_ref column
 * @method CommonResultatAnalyse findOneByIdOffre(int $id_offre) Return the first CommonResultatAnalyse filtered by the id_offre column
 * @method CommonResultatAnalyse findOneByLot(int $lot) Return the first CommonResultatAnalyse filtered by the lot column
 * @method CommonResultatAnalyse findOneByMontantOffre(string $montant_offre) Return the first CommonResultatAnalyse filtered by the montant_offre column
 * @method CommonResultatAnalyse findOneByNote(string $note) Return the first CommonResultatAnalyse filtered by the note column
 * @method CommonResultatAnalyse findOneByClassement(int $classement) Return the first CommonResultatAnalyse filtered by the classement column
 * @method CommonResultatAnalyse findOneByObservation(string $observation) Return the first CommonResultatAnalyse filtered by the observation column
 * @method CommonResultatAnalyse findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonResultatAnalyse filtered by the type_enveloppe column
 * @method CommonResultatAnalyse findOneByOffreVariante(string $offre_variante) Return the first CommonResultatAnalyse filtered by the offre_variante column
 *
 * @method array findById(int $id) Return CommonResultatAnalyse objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonResultatAnalyse objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonResultatAnalyse objects filtered by the consultation_ref column
 * @method array findByIdOffre(int $id_offre) Return CommonResultatAnalyse objects filtered by the id_offre column
 * @method array findByLot(int $lot) Return CommonResultatAnalyse objects filtered by the lot column
 * @method array findByMontantOffre(string $montant_offre) Return CommonResultatAnalyse objects filtered by the montant_offre column
 * @method array findByNote(string $note) Return CommonResultatAnalyse objects filtered by the note column
 * @method array findByClassement(int $classement) Return CommonResultatAnalyse objects filtered by the classement column
 * @method array findByObservation(string $observation) Return CommonResultatAnalyse objects filtered by the observation column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonResultatAnalyse objects filtered by the type_enveloppe column
 * @method array findByOffreVariante(string $offre_variante) Return CommonResultatAnalyse objects filtered by the offre_variante column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonResultatAnalyseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonResultatAnalyseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonResultatAnalyse', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonResultatAnalyseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonResultatAnalyseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonResultatAnalyseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonResultatAnalyseQuery) {
            return $criteria;
        }
        $query = new CommonResultatAnalyseQuery();
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
     * @return   CommonResultatAnalyse|CommonResultatAnalyse[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonResultatAnalysePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalysePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonResultatAnalyse A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `id_offre`, `lot`, `montant_offre`, `note`, `classement`, `observation`, `type_enveloppe`, `offre_variante` FROM `resultat_analyse` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonResultatAnalyse();
            $obj->hydrate($row);
            CommonResultatAnalysePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonResultatAnalyse|CommonResultatAnalyse[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonResultatAnalyse[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonResultatAnalysePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonResultatAnalysePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonResultatAnalysePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonResultatAnalysePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::ID, $id, $comparison);
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResultatAnalysePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::ID_OFFRE, $idOffre, $comparison);
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
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the montant_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantOffre('fooValue');   // WHERE montant_offre = 'fooValue'
     * $query->filterByMontantOffre('%fooValue%'); // WHERE montant_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByMontantOffre($montantOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantOffre)) {
                $montantOffre = str_replace('*', '%', $montantOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::MONTANT_OFFRE, $montantOffre, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the classement column
     *
     * Example usage:
     * <code>
     * $query->filterByClassement(1234); // WHERE classement = 1234
     * $query->filterByClassement(array(12, 34)); // WHERE classement IN (12, 34)
     * $query->filterByClassement(array('min' => 12)); // WHERE classement >= 12
     * $query->filterByClassement(array('max' => 12)); // WHERE classement <= 12
     * </code>
     *
     * @param     mixed $classement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByClassement($classement = null, $comparison = null)
    {
        if (is_array($classement)) {
            $useMinMax = false;
            if (isset($classement['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::CLASSEMENT, $classement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($classement['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::CLASSEMENT, $classement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::CLASSEMENT, $classement, $comparison);
    }

    /**
     * Filter the query on the observation column
     *
     * Example usage:
     * <code>
     * $query->filterByObservation('fooValue');   // WHERE observation = 'fooValue'
     * $query->filterByObservation('%fooValue%'); // WHERE observation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByObservation($observation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observation)) {
                $observation = str_replace('*', '%', $observation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::OBSERVATION, $observation, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe(1234); // WHERE type_enveloppe = 1234
     * $query->filterByTypeEnveloppe(array(12, 34)); // WHERE type_enveloppe IN (12, 34)
     * $query->filterByTypeEnveloppe(array('min' => 12)); // WHERE type_enveloppe >= 12
     * $query->filterByTypeEnveloppe(array('max' => 12)); // WHERE type_enveloppe <= 12
     * </code>
     *
     * @param     mixed $typeEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonResultatAnalysePeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
    }

    /**
     * Filter the query on the offre_variante column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreVariante('fooValue');   // WHERE offre_variante = 'fooValue'
     * $query->filterByOffreVariante('%fooValue%'); // WHERE offre_variante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $offreVariante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function filterByOffreVariante($offreVariante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($offreVariante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $offreVariante)) {
                $offreVariante = str_replace('*', '%', $offreVariante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalysePeer::OFFRE_VARIANTE, $offreVariante, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonResultatAnalyse $commonResultatAnalyse Object to remove from the list of results
     *
     * @return CommonResultatAnalyseQuery The current query, for fluid interface
     */
    public function prune($commonResultatAnalyse = null)
    {
        if ($commonResultatAnalyse) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonResultatAnalysePeer::ID), $commonResultatAnalyse->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonResultatAnalysePeer::ORGANISME), $commonResultatAnalyse->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
