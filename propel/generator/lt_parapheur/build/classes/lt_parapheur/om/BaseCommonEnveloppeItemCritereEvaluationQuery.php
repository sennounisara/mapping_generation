<?php


/**
 * Base class that represents a query for the 'EnveloppeItemCritereEvaluation' table.
 *
 * 
 *
 * @method CommonEnveloppeItemCritereEvaluationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByIditemcritereevaluation($order = Criteria::ASC) Order by the idItemCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByIdenveloppecritereevaluation($order = Criteria::ASC) Order by the idEnveloppeCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByPrix($order = Criteria::ASC) Order by the prix column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByRegleEvaluation($order = Criteria::ASC) Order by the regle_evaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByTypeItem($order = Criteria::ASC) Order by the type_item column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByReponseFournisseur($order = Criteria::ASC) Order by the reponse_fournisseur column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method CommonEnveloppeItemCritereEvaluationQuery orderByCommentaireAcheteur($order = Criteria::ASC) Order by the commentaire_acheteur column
 *
 * @method CommonEnveloppeItemCritereEvaluationQuery groupById() Group by the id column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByIditemcritereevaluation() Group by the idItemCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByIdenveloppecritereevaluation() Group by the idEnveloppeCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByLibelle() Group by the libelle column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByPrix() Group by the prix column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByQuantite() Group by the quantite column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByPonderation() Group by the ponderation column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByNumero() Group by the numero column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByRegleEvaluation() Group by the regle_evaluation column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByTypeItem() Group by the type_item column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByReponseFournisseur() Group by the reponse_fournisseur column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByNote() Group by the note column
 * @method CommonEnveloppeItemCritereEvaluationQuery groupByCommentaireAcheteur() Group by the commentaire_acheteur column
 *
 * @method CommonEnveloppeItemCritereEvaluationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnveloppeItemCritereEvaluationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnveloppeItemCritereEvaluationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnveloppeItemCritereEvaluation findOne(PropelPDO $con = null) Return the first CommonEnveloppeItemCritereEvaluation matching the query
 * @method CommonEnveloppeItemCritereEvaluation findOneOrCreate(PropelPDO $con = null) Return the first CommonEnveloppeItemCritereEvaluation matching the query, or a new CommonEnveloppeItemCritereEvaluation object populated from the query conditions when no match is found
 *
 * @method CommonEnveloppeItemCritereEvaluation findOneByIditemcritereevaluation(int $idItemCritereEvaluation) Return the first CommonEnveloppeItemCritereEvaluation filtered by the idItemCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluation findOneByIdenveloppecritereevaluation(int $idEnveloppeCritereEvaluation) Return the first CommonEnveloppeItemCritereEvaluation filtered by the idEnveloppeCritereEvaluation column
 * @method CommonEnveloppeItemCritereEvaluation findOneByLibelle(string $libelle) Return the first CommonEnveloppeItemCritereEvaluation filtered by the libelle column
 * @method CommonEnveloppeItemCritereEvaluation findOneByPrix(string $prix) Return the first CommonEnveloppeItemCritereEvaluation filtered by the prix column
 * @method CommonEnveloppeItemCritereEvaluation findOneByQuantite(int $quantite) Return the first CommonEnveloppeItemCritereEvaluation filtered by the quantite column
 * @method CommonEnveloppeItemCritereEvaluation findOneByPonderation(int $ponderation) Return the first CommonEnveloppeItemCritereEvaluation filtered by the ponderation column
 * @method CommonEnveloppeItemCritereEvaluation findOneByNumero(int $numero) Return the first CommonEnveloppeItemCritereEvaluation filtered by the numero column
 * @method CommonEnveloppeItemCritereEvaluation findOneByRegleEvaluation(int $regle_evaluation) Return the first CommonEnveloppeItemCritereEvaluation filtered by the regle_evaluation column
 * @method CommonEnveloppeItemCritereEvaluation findOneByTypeItem(int $type_item) Return the first CommonEnveloppeItemCritereEvaluation filtered by the type_item column
 * @method CommonEnveloppeItemCritereEvaluation findOneByReponseFournisseur(string $reponse_fournisseur) Return the first CommonEnveloppeItemCritereEvaluation filtered by the reponse_fournisseur column
 * @method CommonEnveloppeItemCritereEvaluation findOneByNote(string $note) Return the first CommonEnveloppeItemCritereEvaluation filtered by the note column
 * @method CommonEnveloppeItemCritereEvaluation findOneByCommentaireAcheteur(string $commentaire_acheteur) Return the first CommonEnveloppeItemCritereEvaluation filtered by the commentaire_acheteur column
 *
 * @method array findById(int $id) Return CommonEnveloppeItemCritereEvaluation objects filtered by the id column
 * @method array findByIditemcritereevaluation(int $idItemCritereEvaluation) Return CommonEnveloppeItemCritereEvaluation objects filtered by the idItemCritereEvaluation column
 * @method array findByIdenveloppecritereevaluation(int $idEnveloppeCritereEvaluation) Return CommonEnveloppeItemCritereEvaluation objects filtered by the idEnveloppeCritereEvaluation column
 * @method array findByLibelle(string $libelle) Return CommonEnveloppeItemCritereEvaluation objects filtered by the libelle column
 * @method array findByPrix(string $prix) Return CommonEnveloppeItemCritereEvaluation objects filtered by the prix column
 * @method array findByQuantite(int $quantite) Return CommonEnveloppeItemCritereEvaluation objects filtered by the quantite column
 * @method array findByPonderation(int $ponderation) Return CommonEnveloppeItemCritereEvaluation objects filtered by the ponderation column
 * @method array findByNumero(int $numero) Return CommonEnveloppeItemCritereEvaluation objects filtered by the numero column
 * @method array findByRegleEvaluation(int $regle_evaluation) Return CommonEnveloppeItemCritereEvaluation objects filtered by the regle_evaluation column
 * @method array findByTypeItem(int $type_item) Return CommonEnveloppeItemCritereEvaluation objects filtered by the type_item column
 * @method array findByReponseFournisseur(string $reponse_fournisseur) Return CommonEnveloppeItemCritereEvaluation objects filtered by the reponse_fournisseur column
 * @method array findByNote(string $note) Return CommonEnveloppeItemCritereEvaluation objects filtered by the note column
 * @method array findByCommentaireAcheteur(string $commentaire_acheteur) Return CommonEnveloppeItemCritereEvaluation objects filtered by the commentaire_acheteur column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnveloppeItemCritereEvaluationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnveloppeItemCritereEvaluationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnveloppeItemCritereEvaluation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnveloppeItemCritereEvaluationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnveloppeItemCritereEvaluationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnveloppeItemCritereEvaluationQuery) {
            return $criteria;
        }
        $query = new CommonEnveloppeItemCritereEvaluationQuery();
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
     * @return   CommonEnveloppeItemCritereEvaluation|CommonEnveloppeItemCritereEvaluation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppeItemCritereEvaluation A model object, or null if the key is not found
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
     * @return                 CommonEnveloppeItemCritereEvaluation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idItemCritereEvaluation`, `idEnveloppeCritereEvaluation`, `libelle`, `prix`, `quantite`, `ponderation`, `numero`, `regle_evaluation`, `type_item`, `reponse_fournisseur`, `note`, `commentaire_acheteur` FROM `EnveloppeItemCritereEvaluation` WHERE `id` = :p0';
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
            $obj = new CommonEnveloppeItemCritereEvaluation();
            $obj->hydrate($row);
            CommonEnveloppeItemCritereEvaluationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEnveloppeItemCritereEvaluation|CommonEnveloppeItemCritereEvaluation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnveloppeItemCritereEvaluation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idItemCritereEvaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByIditemcritereevaluation(1234); // WHERE idItemCritereEvaluation = 1234
     * $query->filterByIditemcritereevaluation(array(12, 34)); // WHERE idItemCritereEvaluation IN (12, 34)
     * $query->filterByIditemcritereevaluation(array('min' => 12)); // WHERE idItemCritereEvaluation >= 12
     * $query->filterByIditemcritereevaluation(array('max' => 12)); // WHERE idItemCritereEvaluation <= 12
     * </code>
     *
     * @param     mixed $iditemcritereevaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIditemcritereevaluation($iditemcritereevaluation = null, $comparison = null)
    {
        if (is_array($iditemcritereevaluation)) {
            $useMinMax = false;
            if (isset($iditemcritereevaluation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION, $iditemcritereevaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iditemcritereevaluation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION, $iditemcritereevaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION, $iditemcritereevaluation, $comparison);
    }

    /**
     * Filter the query on the idEnveloppeCritereEvaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenveloppecritereevaluation(1234); // WHERE idEnveloppeCritereEvaluation = 1234
     * $query->filterByIdenveloppecritereevaluation(array(12, 34)); // WHERE idEnveloppeCritereEvaluation IN (12, 34)
     * $query->filterByIdenveloppecritereevaluation(array('min' => 12)); // WHERE idEnveloppeCritereEvaluation >= 12
     * $query->filterByIdenveloppecritereevaluation(array('max' => 12)); // WHERE idEnveloppeCritereEvaluation <= 12
     * </code>
     *
     * @param     mixed $idenveloppecritereevaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIdenveloppecritereevaluation($idenveloppecritereevaluation = null, $comparison = null)
    {
        if (is_array($idenveloppecritereevaluation)) {
            $useMinMax = false;
            if (isset($idenveloppecritereevaluation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, $idenveloppecritereevaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenveloppecritereevaluation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, $idenveloppecritereevaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, $idenveloppecritereevaluation, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the prix column
     *
     * Example usage:
     * <code>
     * $query->filterByPrix('fooValue');   // WHERE prix = 'fooValue'
     * $query->filterByPrix('%fooValue%'); // WHERE prix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrix($prix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prix)) {
                $prix = str_replace('*', '%', $prix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::PRIX, $prix, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the ponderation column
     *
     * Example usage:
     * <code>
     * $query->filterByPonderation(1234); // WHERE ponderation = 1234
     * $query->filterByPonderation(array(12, 34)); // WHERE ponderation IN (12, 34)
     * $query->filterByPonderation(array('min' => 12)); // WHERE ponderation >= 12
     * $query->filterByPonderation(array('max' => 12)); // WHERE ponderation <= 12
     * </code>
     *
     * @param     mixed $ponderation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPonderation($ponderation = null, $comparison = null)
    {
        if (is_array($ponderation)) {
            $useMinMax = false;
            if (isset($ponderation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ponderation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::PONDERATION, $ponderation, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero(1234); // WHERE numero = 1234
     * $query->filterByNumero(array(12, 34)); // WHERE numero IN (12, 34)
     * $query->filterByNumero(array('min' => 12)); // WHERE numero >= 12
     * $query->filterByNumero(array('max' => 12)); // WHERE numero <= 12
     * </code>
     *
     * @param     mixed $numero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (is_array($numero)) {
            $useMinMax = false;
            if (isset($numero['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numero['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the regle_evaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleEvaluation(1234); // WHERE regle_evaluation = 1234
     * $query->filterByRegleEvaluation(array(12, 34)); // WHERE regle_evaluation IN (12, 34)
     * $query->filterByRegleEvaluation(array('min' => 12)); // WHERE regle_evaluation >= 12
     * $query->filterByRegleEvaluation(array('max' => 12)); // WHERE regle_evaluation <= 12
     * </code>
     *
     * @param     mixed $regleEvaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByRegleEvaluation($regleEvaluation = null, $comparison = null)
    {
        if (is_array($regleEvaluation)) {
            $useMinMax = false;
            if (isset($regleEvaluation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regleEvaluation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation, $comparison);
    }

    /**
     * Filter the query on the type_item column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeItem(1234); // WHERE type_item = 1234
     * $query->filterByTypeItem(array(12, 34)); // WHERE type_item IN (12, 34)
     * $query->filterByTypeItem(array('min' => 12)); // WHERE type_item >= 12
     * $query->filterByTypeItem(array('max' => 12)); // WHERE type_item <= 12
     * </code>
     *
     * @param     mixed $typeItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByTypeItem($typeItem = null, $comparison = null)
    {
        if (is_array($typeItem)) {
            $useMinMax = false;
            if (isset($typeItem['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM, $typeItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeItem['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM, $typeItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM, $typeItem, $comparison);
    }

    /**
     * Filter the query on the reponse_fournisseur column
     *
     * Example usage:
     * <code>
     * $query->filterByReponseFournisseur('fooValue');   // WHERE reponse_fournisseur = 'fooValue'
     * $query->filterByReponseFournisseur('%fooValue%'); // WHERE reponse_fournisseur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reponseFournisseur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByReponseFournisseur($reponseFournisseur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reponseFournisseur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reponseFournisseur)) {
                $reponseFournisseur = str_replace('*', '%', $reponseFournisseur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::REPONSE_FOURNISSEUR, $reponseFournisseur, $comparison);
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
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the commentaire_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireAcheteur('fooValue');   // WHERE commentaire_acheteur = 'fooValue'
     * $query->filterByCommentaireAcheteur('%fooValue%'); // WHERE commentaire_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByCommentaireAcheteur($commentaireAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireAcheteur)) {
                $commentaireAcheteur = str_replace('*', '%', $commentaireAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::COMMENTAIRE_ACHETEUR, $commentaireAcheteur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnveloppeItemCritereEvaluation $commonEnveloppeItemCritereEvaluation Object to remove from the list of results
     *
     * @return CommonEnveloppeItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function prune($commonEnveloppeItemCritereEvaluation = null)
    {
        if ($commonEnveloppeItemCritereEvaluation) {
            $this->addUsingAlias(CommonEnveloppeItemCritereEvaluationPeer::ID, $commonEnveloppeItemCritereEvaluation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
