<?php


/**
 * Base class that represents a query for the 'ReponseInscritFormulaireConsultation' table.
 *
 * 
 *
 * @method CommonReponseInscritFormulaireConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReponseInscritFormulaireConsultationQuery orderByIdFormulaireConsultation($order = Criteria::ASC) Order by the id_Formulaire_consultation column
 * @method CommonReponseInscritFormulaireConsultationQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonReponseInscritFormulaireConsultationQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonReponseInscritFormulaireConsultationQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonReponseInscritFormulaireConsultationQuery orderByTotalBdHt($order = Criteria::ASC) Order by the total_bd_ht column
 *
 * @method CommonReponseInscritFormulaireConsultationQuery groupById() Group by the id column
 * @method CommonReponseInscritFormulaireConsultationQuery groupByIdFormulaireConsultation() Group by the id_Formulaire_consultation column
 * @method CommonReponseInscritFormulaireConsultationQuery groupByStatut() Group by the statut column
 * @method CommonReponseInscritFormulaireConsultationQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonReponseInscritFormulaireConsultationQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonReponseInscritFormulaireConsultationQuery groupByTotalBdHt() Group by the total_bd_ht column
 *
 * @method CommonReponseInscritFormulaireConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReponseInscritFormulaireConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReponseInscritFormulaireConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReponseInscritFormulaireConsultation findOne(PropelPDO $con = null) Return the first CommonReponseInscritFormulaireConsultation matching the query
 * @method CommonReponseInscritFormulaireConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonReponseInscritFormulaireConsultation matching the query, or a new CommonReponseInscritFormulaireConsultation object populated from the query conditions when no match is found
 *
 * @method CommonReponseInscritFormulaireConsultation findOneByIdFormulaireConsultation(int $id_Formulaire_consultation) Return the first CommonReponseInscritFormulaireConsultation filtered by the id_Formulaire_consultation column
 * @method CommonReponseInscritFormulaireConsultation findOneByStatut(int $statut) Return the first CommonReponseInscritFormulaireConsultation filtered by the statut column
 * @method CommonReponseInscritFormulaireConsultation findOneByIdInscrit(int $id_inscrit) Return the first CommonReponseInscritFormulaireConsultation filtered by the id_inscrit column
 * @method CommonReponseInscritFormulaireConsultation findOneByIdEntreprise(int $id_entreprise) Return the first CommonReponseInscritFormulaireConsultation filtered by the id_entreprise column
 * @method CommonReponseInscritFormulaireConsultation findOneByTotalBdHt(string $total_bd_ht) Return the first CommonReponseInscritFormulaireConsultation filtered by the total_bd_ht column
 *
 * @method array findById(int $id) Return CommonReponseInscritFormulaireConsultation objects filtered by the id column
 * @method array findByIdFormulaireConsultation(int $id_Formulaire_consultation) Return CommonReponseInscritFormulaireConsultation objects filtered by the id_Formulaire_consultation column
 * @method array findByStatut(int $statut) Return CommonReponseInscritFormulaireConsultation objects filtered by the statut column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonReponseInscritFormulaireConsultation objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonReponseInscritFormulaireConsultation objects filtered by the id_entreprise column
 * @method array findByTotalBdHt(string $total_bd_ht) Return CommonReponseInscritFormulaireConsultation objects filtered by the total_bd_ht column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReponseInscritFormulaireConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReponseInscritFormulaireConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReponseInscritFormulaireConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReponseInscritFormulaireConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReponseInscritFormulaireConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReponseInscritFormulaireConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReponseInscritFormulaireConsultationQuery) {
            return $criteria;
        }
        $query = new CommonReponseInscritFormulaireConsultationQuery();
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
     * @return   CommonReponseInscritFormulaireConsultation|CommonReponseInscritFormulaireConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReponseInscritFormulaireConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReponseInscritFormulaireConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReponseInscritFormulaireConsultation A model object, or null if the key is not found
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
     * @return                 CommonReponseInscritFormulaireConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_Formulaire_consultation`, `statut`, `id_inscrit`, `id_entreprise`, `total_bd_ht` FROM `ReponseInscritFormulaireConsultation` WHERE `id` = :p0';
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
            $obj = new CommonReponseInscritFormulaireConsultation();
            $obj->hydrate($row);
            CommonReponseInscritFormulaireConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReponseInscritFormulaireConsultation|CommonReponseInscritFormulaireConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReponseInscritFormulaireConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_Formulaire_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormulaireConsultation(1234); // WHERE id_Formulaire_consultation = 1234
     * $query->filterByIdFormulaireConsultation(array(12, 34)); // WHERE id_Formulaire_consultation IN (12, 34)
     * $query->filterByIdFormulaireConsultation(array('min' => 12)); // WHERE id_Formulaire_consultation >= 12
     * $query->filterByIdFormulaireConsultation(array('max' => 12)); // WHERE id_Formulaire_consultation <= 12
     * </code>
     *
     * @param     mixed $idFormulaireConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByIdFormulaireConsultation($idFormulaireConsultation = null, $comparison = null)
    {
        if (is_array($idFormulaireConsultation)) {
            $useMinMax = false;
            if (isset($idFormulaireConsultation['min'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_FORMULAIRE_CONSULTATION, $idFormulaireConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormulaireConsultation['max'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_FORMULAIRE_CONSULTATION, $idFormulaireConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_FORMULAIRE_CONSULTATION, $idFormulaireConsultation, $comparison);
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
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::STATUT, $statut, $comparison);
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
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the total_bd_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalBdHt('fooValue');   // WHERE total_bd_ht = 'fooValue'
     * $query->filterByTotalBdHt('%fooValue%'); // WHERE total_bd_ht LIKE '%fooValue%'
     * </code>
     *
     * @param     string $totalBdHt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByTotalBdHt($totalBdHt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($totalBdHt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $totalBdHt)) {
                $totalBdHt = str_replace('*', '%', $totalBdHt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::TOTAL_BD_HT, $totalBdHt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReponseInscritFormulaireConsultation $commonReponseInscritFormulaireConsultation Object to remove from the list of results
     *
     * @return CommonReponseInscritFormulaireConsultationQuery The current query, for fluid interface
     */
    public function prune($commonReponseInscritFormulaireConsultation = null)
    {
        if ($commonReponseInscritFormulaireConsultation) {
            $this->addUsingAlias(CommonReponseInscritFormulaireConsultationPeer::ID, $commonReponseInscritFormulaireConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
