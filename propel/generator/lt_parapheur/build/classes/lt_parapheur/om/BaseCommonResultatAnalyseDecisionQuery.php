<?php


/**
 * Base class that represents a query for the 'resultat_analyse_decision' table.
 *
 * 
 *
 * @method CommonResultatAnalyseDecisionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonResultatAnalyseDecisionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonResultatAnalyseDecisionQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonResultatAnalyseDecisionQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonResultatAnalyseDecisionQuery orderByDateDecision($order = Criteria::ASC) Order by the date_decision column
 * @method CommonResultatAnalyseDecisionQuery orderByTypeDecision($order = Criteria::ASC) Order by the type_decision column
 * @method CommonResultatAnalyseDecisionQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonResultatAnalyseDecisionQuery orderByAutreTypeDecision($order = Criteria::ASC) Order by the autre_type_decision column
 * @method CommonResultatAnalyseDecisionQuery orderByAutre($order = Criteria::ASC) Order by the autre column
 * @method CommonResultatAnalyseDecisionQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonResultatAnalyseDecisionQuery orderByJustificatif($order = Criteria::ASC) Order by the justificatif column
 * @method CommonResultatAnalyseDecisionQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonResultatAnalyseDecisionQuery orderByTypeDepot($order = Criteria::ASC) Order by the type_depot column
 *
 * @method CommonResultatAnalyseDecisionQuery groupById() Group by the id column
 * @method CommonResultatAnalyseDecisionQuery groupByOrganisme() Group by the organisme column
 * @method CommonResultatAnalyseDecisionQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonResultatAnalyseDecisionQuery groupByLot() Group by the lot column
 * @method CommonResultatAnalyseDecisionQuery groupByDateDecision() Group by the date_decision column
 * @method CommonResultatAnalyseDecisionQuery groupByTypeDecision() Group by the type_decision column
 * @method CommonResultatAnalyseDecisionQuery groupByCommentaire() Group by the commentaire column
 * @method CommonResultatAnalyseDecisionQuery groupByAutreTypeDecision() Group by the autre_type_decision column
 * @method CommonResultatAnalyseDecisionQuery groupByAutre() Group by the autre column
 * @method CommonResultatAnalyseDecisionQuery groupByIdOffre() Group by the id_offre column
 * @method CommonResultatAnalyseDecisionQuery groupByJustificatif() Group by the justificatif column
 * @method CommonResultatAnalyseDecisionQuery groupByStatut() Group by the statut column
 * @method CommonResultatAnalyseDecisionQuery groupByTypeDepot() Group by the type_depot column
 *
 * @method CommonResultatAnalyseDecisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonResultatAnalyseDecisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonResultatAnalyseDecisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonResultatAnalyseDecision findOne(PropelPDO $con = null) Return the first CommonResultatAnalyseDecision matching the query
 * @method CommonResultatAnalyseDecision findOneOrCreate(PropelPDO $con = null) Return the first CommonResultatAnalyseDecision matching the query, or a new CommonResultatAnalyseDecision object populated from the query conditions when no match is found
 *
 * @method CommonResultatAnalyseDecision findOneById(int $id) Return the first CommonResultatAnalyseDecision filtered by the id column
 * @method CommonResultatAnalyseDecision findOneByOrganisme(string $organisme) Return the first CommonResultatAnalyseDecision filtered by the organisme column
 * @method CommonResultatAnalyseDecision findOneByConsultationRef(int $consultation_ref) Return the first CommonResultatAnalyseDecision filtered by the consultation_ref column
 * @method CommonResultatAnalyseDecision findOneByLot(int $lot) Return the first CommonResultatAnalyseDecision filtered by the lot column
 * @method CommonResultatAnalyseDecision findOneByDateDecision(string $date_decision) Return the first CommonResultatAnalyseDecision filtered by the date_decision column
 * @method CommonResultatAnalyseDecision findOneByTypeDecision(string $type_decision) Return the first CommonResultatAnalyseDecision filtered by the type_decision column
 * @method CommonResultatAnalyseDecision findOneByCommentaire(string $commentaire) Return the first CommonResultatAnalyseDecision filtered by the commentaire column
 * @method CommonResultatAnalyseDecision findOneByAutreTypeDecision(string $autre_type_decision) Return the first CommonResultatAnalyseDecision filtered by the autre_type_decision column
 * @method CommonResultatAnalyseDecision findOneByAutre(string $autre) Return the first CommonResultatAnalyseDecision filtered by the autre column
 * @method CommonResultatAnalyseDecision findOneByIdOffre(int $id_offre) Return the first CommonResultatAnalyseDecision filtered by the id_offre column
 * @method CommonResultatAnalyseDecision findOneByJustificatif(string $justificatif) Return the first CommonResultatAnalyseDecision filtered by the justificatif column
 * @method CommonResultatAnalyseDecision findOneByStatut(int $statut) Return the first CommonResultatAnalyseDecision filtered by the statut column
 * @method CommonResultatAnalyseDecision findOneByTypeDepot(string $type_depot) Return the first CommonResultatAnalyseDecision filtered by the type_depot column
 *
 * @method array findById(int $id) Return CommonResultatAnalyseDecision objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonResultatAnalyseDecision objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonResultatAnalyseDecision objects filtered by the consultation_ref column
 * @method array findByLot(int $lot) Return CommonResultatAnalyseDecision objects filtered by the lot column
 * @method array findByDateDecision(string $date_decision) Return CommonResultatAnalyseDecision objects filtered by the date_decision column
 * @method array findByTypeDecision(string $type_decision) Return CommonResultatAnalyseDecision objects filtered by the type_decision column
 * @method array findByCommentaire(string $commentaire) Return CommonResultatAnalyseDecision objects filtered by the commentaire column
 * @method array findByAutreTypeDecision(string $autre_type_decision) Return CommonResultatAnalyseDecision objects filtered by the autre_type_decision column
 * @method array findByAutre(string $autre) Return CommonResultatAnalyseDecision objects filtered by the autre column
 * @method array findByIdOffre(int $id_offre) Return CommonResultatAnalyseDecision objects filtered by the id_offre column
 * @method array findByJustificatif(string $justificatif) Return CommonResultatAnalyseDecision objects filtered by the justificatif column
 * @method array findByStatut(int $statut) Return CommonResultatAnalyseDecision objects filtered by the statut column
 * @method array findByTypeDepot(string $type_depot) Return CommonResultatAnalyseDecision objects filtered by the type_depot column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonResultatAnalyseDecisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonResultatAnalyseDecisionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonResultatAnalyseDecision', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonResultatAnalyseDecisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonResultatAnalyseDecisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonResultatAnalyseDecisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonResultatAnalyseDecisionQuery) {
            return $criteria;
        }
        $query = new CommonResultatAnalyseDecisionQuery();
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
     * @return   CommonResultatAnalyseDecision|CommonResultatAnalyseDecision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonResultatAnalyseDecisionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseDecisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonResultatAnalyseDecision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `lot`, `date_decision`, `type_decision`, `commentaire`, `autre_type_decision`, `autre`, `id_offre`, `justificatif`, `statut`, `type_depot` FROM `resultat_analyse_decision` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonResultatAnalyseDecision();
            $obj->hydrate($row);
            CommonResultatAnalyseDecisionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonResultatAnalyseDecision|CommonResultatAnalyseDecision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonResultatAnalyseDecision[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonResultatAnalyseDecisionPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonResultatAnalyseDecisionPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID, $id, $comparison);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the date_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecision('fooValue');   // WHERE date_decision = 'fooValue'
     * $query->filterByDateDecision('%fooValue%'); // WHERE date_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByDateDecision($dateDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDecision)) {
                $dateDecision = str_replace('*', '%', $dateDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::DATE_DECISION, $dateDecision, $comparison);
    }

    /**
     * Filter the query on the type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecision('fooValue');   // WHERE type_decision = 'fooValue'
     * $query->filterByTypeDecision('%fooValue%'); // WHERE type_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByTypeDecision($typeDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDecision)) {
                $typeDecision = str_replace('*', '%', $typeDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::TYPE_DECISION, $typeDecision, $comparison);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the autre_type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreTypeDecision('fooValue');   // WHERE autre_type_decision = 'fooValue'
     * $query->filterByAutreTypeDecision('%fooValue%'); // WHERE autre_type_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreTypeDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByAutreTypeDecision($autreTypeDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreTypeDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreTypeDecision)) {
                $autreTypeDecision = str_replace('*', '%', $autreTypeDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::AUTRE_TYPE_DECISION, $autreTypeDecision, $comparison);
    }

    /**
     * Filter the query on the autre column
     *
     * Example usage:
     * <code>
     * $query->filterByAutre('fooValue');   // WHERE autre = 'fooValue'
     * $query->filterByAutre('%fooValue%'); // WHERE autre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByAutre($autre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autre)) {
                $autre = str_replace('*', '%', $autre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::AUTRE, $autre, $comparison);
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
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByJustificatif('fooValue');   // WHERE justificatif = 'fooValue'
     * $query->filterByJustificatif('%fooValue%'); // WHERE justificatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $justificatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByJustificatif($justificatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($justificatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $justificatif)) {
                $justificatif = str_replace('*', '%', $justificatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::JUSTIFICATIF, $justificatif, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the type_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDepot('fooValue');   // WHERE type_depot = 'fooValue'
     * $query->filterByTypeDepot('%fooValue%'); // WHERE type_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function filterByTypeDepot($typeDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDepot)) {
                $typeDepot = str_replace('*', '%', $typeDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseDecisionPeer::TYPE_DEPOT, $typeDepot, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonResultatAnalyseDecision $commonResultatAnalyseDecision Object to remove from the list of results
     *
     * @return CommonResultatAnalyseDecisionQuery The current query, for fluid interface
     */
    public function prune($commonResultatAnalyseDecision = null)
    {
        if ($commonResultatAnalyseDecision) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonResultatAnalyseDecisionPeer::ID), $commonResultatAnalyseDecision->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonResultatAnalyseDecisionPeer::ORGANISME), $commonResultatAnalyseDecision->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
