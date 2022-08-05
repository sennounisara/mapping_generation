<?php


/**
 * Base class that represents a query for the 'EnveloppeCritereEvaluation' table.
 *
 * 
 *
 * @method CommonEnveloppeCritereEvaluationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnveloppeCritereEvaluationQuery orderByIdcritereevaluation($order = Criteria::ASC) Order by the idCritereEvaluation column
 * @method CommonEnveloppeCritereEvaluationQuery orderByRejet($order = Criteria::ASC) Order by the rejet column
 * @method CommonEnveloppeCritereEvaluationQuery orderByStatutCritereEvaluation($order = Criteria::ASC) Order by the statut_critere_evaluation column
 * @method CommonEnveloppeCritereEvaluationQuery orderByNoteTotale($order = Criteria::ASC) Order by the note_totale column
 * @method CommonEnveloppeCritereEvaluationQuery orderByCommentaireTotal($order = Criteria::ASC) Order by the commentaire_total column
 * @method CommonEnveloppeCritereEvaluationQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonEnveloppeCritereEvaluationQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 *
 * @method CommonEnveloppeCritereEvaluationQuery groupById() Group by the id column
 * @method CommonEnveloppeCritereEvaluationQuery groupByIdcritereevaluation() Group by the idCritereEvaluation column
 * @method CommonEnveloppeCritereEvaluationQuery groupByRejet() Group by the rejet column
 * @method CommonEnveloppeCritereEvaluationQuery groupByStatutCritereEvaluation() Group by the statut_critere_evaluation column
 * @method CommonEnveloppeCritereEvaluationQuery groupByNoteTotale() Group by the note_totale column
 * @method CommonEnveloppeCritereEvaluationQuery groupByCommentaireTotal() Group by the commentaire_total column
 * @method CommonEnveloppeCritereEvaluationQuery groupByIdAgent() Group by the id_agent column
 * @method CommonEnveloppeCritereEvaluationQuery groupByIdEnveloppe() Group by the id_enveloppe column
 *
 * @method CommonEnveloppeCritereEvaluationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnveloppeCritereEvaluationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnveloppeCritereEvaluationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnveloppeCritereEvaluation findOne(PropelPDO $con = null) Return the first CommonEnveloppeCritereEvaluation matching the query
 * @method CommonEnveloppeCritereEvaluation findOneOrCreate(PropelPDO $con = null) Return the first CommonEnveloppeCritereEvaluation matching the query, or a new CommonEnveloppeCritereEvaluation object populated from the query conditions when no match is found
 *
 * @method CommonEnveloppeCritereEvaluation findOneByIdcritereevaluation(int $idCritereEvaluation) Return the first CommonEnveloppeCritereEvaluation filtered by the idCritereEvaluation column
 * @method CommonEnveloppeCritereEvaluation findOneByRejet(int $rejet) Return the first CommonEnveloppeCritereEvaluation filtered by the rejet column
 * @method CommonEnveloppeCritereEvaluation findOneByStatutCritereEvaluation(int $statut_critere_evaluation) Return the first CommonEnveloppeCritereEvaluation filtered by the statut_critere_evaluation column
 * @method CommonEnveloppeCritereEvaluation findOneByNoteTotale(string $note_totale) Return the first CommonEnveloppeCritereEvaluation filtered by the note_totale column
 * @method CommonEnveloppeCritereEvaluation findOneByCommentaireTotal(string $commentaire_total) Return the first CommonEnveloppeCritereEvaluation filtered by the commentaire_total column
 * @method CommonEnveloppeCritereEvaluation findOneByIdAgent(int $id_agent) Return the first CommonEnveloppeCritereEvaluation filtered by the id_agent column
 * @method CommonEnveloppeCritereEvaluation findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonEnveloppeCritereEvaluation filtered by the id_enveloppe column
 *
 * @method array findById(int $id) Return CommonEnveloppeCritereEvaluation objects filtered by the id column
 * @method array findByIdcritereevaluation(int $idCritereEvaluation) Return CommonEnveloppeCritereEvaluation objects filtered by the idCritereEvaluation column
 * @method array findByRejet(int $rejet) Return CommonEnveloppeCritereEvaluation objects filtered by the rejet column
 * @method array findByStatutCritereEvaluation(int $statut_critere_evaluation) Return CommonEnveloppeCritereEvaluation objects filtered by the statut_critere_evaluation column
 * @method array findByNoteTotale(string $note_totale) Return CommonEnveloppeCritereEvaluation objects filtered by the note_totale column
 * @method array findByCommentaireTotal(string $commentaire_total) Return CommonEnveloppeCritereEvaluation objects filtered by the commentaire_total column
 * @method array findByIdAgent(int $id_agent) Return CommonEnveloppeCritereEvaluation objects filtered by the id_agent column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonEnveloppeCritereEvaluation objects filtered by the id_enveloppe column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnveloppeCritereEvaluationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnveloppeCritereEvaluationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnveloppeCritereEvaluation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnveloppeCritereEvaluationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnveloppeCritereEvaluationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnveloppeCritereEvaluationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnveloppeCritereEvaluationQuery) {
            return $criteria;
        }
        $query = new CommonEnveloppeCritereEvaluationQuery();
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
     * @return   CommonEnveloppeCritereEvaluation|CommonEnveloppeCritereEvaluation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnveloppeCritereEvaluationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppeCritereEvaluation A model object, or null if the key is not found
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
     * @return                 CommonEnveloppeCritereEvaluation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idCritereEvaluation`, `rejet`, `statut_critere_evaluation`, `note_totale`, `commentaire_total`, `id_agent`, `id_enveloppe` FROM `EnveloppeCritereEvaluation` WHERE `id` = :p0';
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
            $obj = new CommonEnveloppeCritereEvaluation();
            $obj->hydrate($row);
            CommonEnveloppeCritereEvaluationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEnveloppeCritereEvaluation|CommonEnveloppeCritereEvaluation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnveloppeCritereEvaluation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idCritereEvaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcritereevaluation(1234); // WHERE idCritereEvaluation = 1234
     * $query->filterByIdcritereevaluation(array(12, 34)); // WHERE idCritereEvaluation IN (12, 34)
     * $query->filterByIdcritereevaluation(array('min' => 12)); // WHERE idCritereEvaluation >= 12
     * $query->filterByIdcritereevaluation(array('max' => 12)); // WHERE idCritereEvaluation <= 12
     * </code>
     *
     * @param     mixed $idcritereevaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIdcritereevaluation($idcritereevaluation = null, $comparison = null)
    {
        if (is_array($idcritereevaluation)) {
            $useMinMax = false;
            if (isset($idcritereevaluation['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcritereevaluation['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation, $comparison);
    }

    /**
     * Filter the query on the rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByRejet(1234); // WHERE rejet = 1234
     * $query->filterByRejet(array(12, 34)); // WHERE rejet IN (12, 34)
     * $query->filterByRejet(array('min' => 12)); // WHERE rejet >= 12
     * $query->filterByRejet(array('max' => 12)); // WHERE rejet <= 12
     * </code>
     *
     * @param     mixed $rejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByRejet($rejet = null, $comparison = null)
    {
        if (is_array($rejet)) {
            $useMinMax = false;
            if (isset($rejet['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::REJET, $rejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rejet['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::REJET, $rejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::REJET, $rejet, $comparison);
    }

    /**
     * Filter the query on the statut_critere_evaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutCritereEvaluation(1234); // WHERE statut_critere_evaluation = 1234
     * $query->filterByStatutCritereEvaluation(array(12, 34)); // WHERE statut_critere_evaluation IN (12, 34)
     * $query->filterByStatutCritereEvaluation(array('min' => 12)); // WHERE statut_critere_evaluation >= 12
     * $query->filterByStatutCritereEvaluation(array('max' => 12)); // WHERE statut_critere_evaluation <= 12
     * </code>
     *
     * @param     mixed $statutCritereEvaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByStatutCritereEvaluation($statutCritereEvaluation = null, $comparison = null)
    {
        if (is_array($statutCritereEvaluation)) {
            $useMinMax = false;
            if (isset($statutCritereEvaluation['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::STATUT_CRITERE_EVALUATION, $statutCritereEvaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutCritereEvaluation['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::STATUT_CRITERE_EVALUATION, $statutCritereEvaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::STATUT_CRITERE_EVALUATION, $statutCritereEvaluation, $comparison);
    }

    /**
     * Filter the query on the note_totale column
     *
     * Example usage:
     * <code>
     * $query->filterByNoteTotale('fooValue');   // WHERE note_totale = 'fooValue'
     * $query->filterByNoteTotale('%fooValue%'); // WHERE note_totale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noteTotale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByNoteTotale($noteTotale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noteTotale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noteTotale)) {
                $noteTotale = str_replace('*', '%', $noteTotale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::NOTE_TOTALE, $noteTotale, $comparison);
    }

    /**
     * Filter the query on the commentaire_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireTotal('fooValue');   // WHERE commentaire_total = 'fooValue'
     * $query->filterByCommentaireTotal('%fooValue%'); // WHERE commentaire_total LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireTotal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByCommentaireTotal($commentaireTotal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireTotal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireTotal)) {
                $commentaireTotal = str_replace('*', '%', $commentaireTotal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::COMMENTAIRE_TOTAL, $commentaireTotal, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnveloppeCritereEvaluation $commonEnveloppeCritereEvaluation Object to remove from the list of results
     *
     * @return CommonEnveloppeCritereEvaluationQuery The current query, for fluid interface
     */
    public function prune($commonEnveloppeCritereEvaluation = null)
    {
        if ($commonEnveloppeCritereEvaluation) {
            $this->addUsingAlias(CommonEnveloppeCritereEvaluationPeer::ID, $commonEnveloppeCritereEvaluation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
