<?php


/**
 * Base class that represents a query for the 'Faq_Entreprise' table.
 *
 * 
 *
 * @method CommonFaqEntrepriseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFaqEntrepriseQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method CommonFaqEntrepriseQuery orderByQuestionFr($order = Criteria::ASC) Order by the question_fr column
 * @method CommonFaqEntrepriseQuery orderByQuestionEn($order = Criteria::ASC) Order by the question_en column
 * @method CommonFaqEntrepriseQuery orderByQuestionEs($order = Criteria::ASC) Order by the question_es column
 * @method CommonFaqEntrepriseQuery orderByReponse($order = Criteria::ASC) Order by the reponse column
 * @method CommonFaqEntrepriseQuery orderByReponseFr($order = Criteria::ASC) Order by the reponse_fr column
 * @method CommonFaqEntrepriseQuery orderByReponseEn($order = Criteria::ASC) Order by the reponse_en column
 * @method CommonFaqEntrepriseQuery orderByReponseEs($order = Criteria::ASC) Order by the reponse_es column
 * @method CommonFaqEntrepriseQuery orderByQuestionIt($order = Criteria::ASC) Order by the question_it column
 * @method CommonFaqEntrepriseQuery orderByReponseIt($order = Criteria::ASC) Order by the reponse_it column
 *
 * @method CommonFaqEntrepriseQuery groupById() Group by the id column
 * @method CommonFaqEntrepriseQuery groupByQuestion() Group by the question column
 * @method CommonFaqEntrepriseQuery groupByQuestionFr() Group by the question_fr column
 * @method CommonFaqEntrepriseQuery groupByQuestionEn() Group by the question_en column
 * @method CommonFaqEntrepriseQuery groupByQuestionEs() Group by the question_es column
 * @method CommonFaqEntrepriseQuery groupByReponse() Group by the reponse column
 * @method CommonFaqEntrepriseQuery groupByReponseFr() Group by the reponse_fr column
 * @method CommonFaqEntrepriseQuery groupByReponseEn() Group by the reponse_en column
 * @method CommonFaqEntrepriseQuery groupByReponseEs() Group by the reponse_es column
 * @method CommonFaqEntrepriseQuery groupByQuestionIt() Group by the question_it column
 * @method CommonFaqEntrepriseQuery groupByReponseIt() Group by the reponse_it column
 *
 * @method CommonFaqEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFaqEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFaqEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFaqEntreprise findOne(PropelPDO $con = null) Return the first CommonFaqEntreprise matching the query
 * @method CommonFaqEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonFaqEntreprise matching the query, or a new CommonFaqEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonFaqEntreprise findOneByQuestion(string $question) Return the first CommonFaqEntreprise filtered by the question column
 * @method CommonFaqEntreprise findOneByQuestionFr(string $question_fr) Return the first CommonFaqEntreprise filtered by the question_fr column
 * @method CommonFaqEntreprise findOneByQuestionEn(string $question_en) Return the first CommonFaqEntreprise filtered by the question_en column
 * @method CommonFaqEntreprise findOneByQuestionEs(string $question_es) Return the first CommonFaqEntreprise filtered by the question_es column
 * @method CommonFaqEntreprise findOneByReponse(string $reponse) Return the first CommonFaqEntreprise filtered by the reponse column
 * @method CommonFaqEntreprise findOneByReponseFr(string $reponse_fr) Return the first CommonFaqEntreprise filtered by the reponse_fr column
 * @method CommonFaqEntreprise findOneByReponseEn(string $reponse_en) Return the first CommonFaqEntreprise filtered by the reponse_en column
 * @method CommonFaqEntreprise findOneByReponseEs(string $reponse_es) Return the first CommonFaqEntreprise filtered by the reponse_es column
 * @method CommonFaqEntreprise findOneByQuestionIt(string $question_it) Return the first CommonFaqEntreprise filtered by the question_it column
 * @method CommonFaqEntreprise findOneByReponseIt(string $reponse_it) Return the first CommonFaqEntreprise filtered by the reponse_it column
 *
 * @method array findById(int $id) Return CommonFaqEntreprise objects filtered by the id column
 * @method array findByQuestion(string $question) Return CommonFaqEntreprise objects filtered by the question column
 * @method array findByQuestionFr(string $question_fr) Return CommonFaqEntreprise objects filtered by the question_fr column
 * @method array findByQuestionEn(string $question_en) Return CommonFaqEntreprise objects filtered by the question_en column
 * @method array findByQuestionEs(string $question_es) Return CommonFaqEntreprise objects filtered by the question_es column
 * @method array findByReponse(string $reponse) Return CommonFaqEntreprise objects filtered by the reponse column
 * @method array findByReponseFr(string $reponse_fr) Return CommonFaqEntreprise objects filtered by the reponse_fr column
 * @method array findByReponseEn(string $reponse_en) Return CommonFaqEntreprise objects filtered by the reponse_en column
 * @method array findByReponseEs(string $reponse_es) Return CommonFaqEntreprise objects filtered by the reponse_es column
 * @method array findByQuestionIt(string $question_it) Return CommonFaqEntreprise objects filtered by the question_it column
 * @method array findByReponseIt(string $reponse_it) Return CommonFaqEntreprise objects filtered by the reponse_it column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFaqEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFaqEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFaqEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFaqEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFaqEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFaqEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFaqEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonFaqEntrepriseQuery();
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
     * @return   CommonFaqEntreprise|CommonFaqEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFaqEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFaqEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFaqEntreprise A model object, or null if the key is not found
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
     * @return                 CommonFaqEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `question`, `question_fr`, `question_en`, `question_es`, `reponse`, `reponse_fr`, `reponse_en`, `reponse_es`, `question_it`, `reponse_it` FROM `Faq_Entreprise` WHERE `id` = :p0';
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
            $obj = new CommonFaqEntreprise();
            $obj->hydrate($row);
            CommonFaqEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonFaqEntreprise|CommonFaqEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonFaqEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $keys, Criteria::IN);
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
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the question column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestion('fooValue');   // WHERE question = 'fooValue'
     * $query->filterByQuestion('%fooValue%'); // WHERE question LIKE '%fooValue%'
     * </code>
     *
     * @param     string $question The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQuestion($question = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($question)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $question)) {
                $question = str_replace('*', '%', $question);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::QUESTION, $question, $comparison);
    }

    /**
     * Filter the query on the question_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestionFr('fooValue');   // WHERE question_fr = 'fooValue'
     * $query->filterByQuestionFr('%fooValue%'); // WHERE question_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $questionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQuestionFr($questionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($questionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $questionFr)) {
                $questionFr = str_replace('*', '%', $questionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::QUESTION_FR, $questionFr, $comparison);
    }

    /**
     * Filter the query on the question_en column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestionEn('fooValue');   // WHERE question_en = 'fooValue'
     * $query->filterByQuestionEn('%fooValue%'); // WHERE question_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $questionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQuestionEn($questionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($questionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $questionEn)) {
                $questionEn = str_replace('*', '%', $questionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::QUESTION_EN, $questionEn, $comparison);
    }

    /**
     * Filter the query on the question_es column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestionEs('fooValue');   // WHERE question_es = 'fooValue'
     * $query->filterByQuestionEs('%fooValue%'); // WHERE question_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $questionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQuestionEs($questionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($questionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $questionEs)) {
                $questionEs = str_replace('*', '%', $questionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::QUESTION_ES, $questionEs, $comparison);
    }

    /**
     * Filter the query on the reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByReponse('fooValue');   // WHERE reponse = 'fooValue'
     * $query->filterByReponse('%fooValue%'); // WHERE reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByReponse($reponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponse)) {
                $reponse = str_replace('*', '%', $reponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::REPONSE, $reponse, $comparison);
    }

    /**
     * Filter the query on the reponse_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseFr('fooValue');   // WHERE reponse_fr = 'fooValue'
     * $query->filterByReponseFr('%fooValue%'); // WHERE reponse_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByReponseFr($reponseFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseFr)) {
                $reponseFr = str_replace('*', '%', $reponseFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::REPONSE_FR, $reponseFr, $comparison);
    }

    /**
     * Filter the query on the reponse_en column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseEn('fooValue');   // WHERE reponse_en = 'fooValue'
     * $query->filterByReponseEn('%fooValue%'); // WHERE reponse_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByReponseEn($reponseEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseEn)) {
                $reponseEn = str_replace('*', '%', $reponseEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::REPONSE_EN, $reponseEn, $comparison);
    }

    /**
     * Filter the query on the reponse_es column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseEs('fooValue');   // WHERE reponse_es = 'fooValue'
     * $query->filterByReponseEs('%fooValue%'); // WHERE reponse_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByReponseEs($reponseEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseEs)) {
                $reponseEs = str_replace('*', '%', $reponseEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::REPONSE_ES, $reponseEs, $comparison);
    }

    /**
     * Filter the query on the question_it column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestionIt('fooValue');   // WHERE question_it = 'fooValue'
     * $query->filterByQuestionIt('%fooValue%'); // WHERE question_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $questionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByQuestionIt($questionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($questionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $questionIt)) {
                $questionIt = str_replace('*', '%', $questionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::QUESTION_IT, $questionIt, $comparison);
    }

    /**
     * Filter the query on the reponse_it column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseIt('fooValue');   // WHERE reponse_it = 'fooValue'
     * $query->filterByReponseIt('%fooValue%'); // WHERE reponse_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function filterByReponseIt($reponseIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseIt)) {
                $reponseIt = str_replace('*', '%', $reponseIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFaqEntreprisePeer::REPONSE_IT, $reponseIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFaqEntreprise $commonFaqEntreprise Object to remove from the list of results
     *
     * @return CommonFaqEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonFaqEntreprise = null)
    {
        if ($commonFaqEntreprise) {
            $this->addUsingAlias(CommonFaqEntreprisePeer::ID, $commonFaqEntreprise->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
