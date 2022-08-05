<?php


/**
 * Base class that represents a query for the 'exec_reception' table.
 *
 * 
 *
 * @method CommonExecReceptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecReceptionQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecReceptionQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecReceptionQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecReceptionQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 * @method CommonExecReceptionQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecReceptionQuery orderByDateReception($order = Criteria::ASC) Order by the date_reception column
 * @method CommonExecReceptionQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecReceptionQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecReceptionQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecReceptionQuery orderByIdAgentRejet($order = Criteria::ASC) Order by the id_agent_rejet column
 * @method CommonExecReceptionQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonExecReceptionQuery orderByOriginePiece($order = Criteria::ASC) Order by the origine_piece column
 * @method CommonExecReceptionQuery orderByNumeroWorkflow($order = Criteria::ASC) Order by the numero_workflow column
 * @method CommonExecReceptionQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecReceptionQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecReceptionQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonExecReceptionQuery orderByOrigine($order = Criteria::ASC) Order by the origine column
 * @method CommonExecReceptionQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 * @method CommonExecReceptionQuery orderByIdPvReception($order = Criteria::ASC) Order by the id_pv_reception column
 * @method CommonExecReceptionQuery orderByAccepte($order = Criteria::ASC) Order by the accepte column
 *
 * @method CommonExecReceptionQuery groupById() Group by the id column
 * @method CommonExecReceptionQuery groupByIntitule() Group by the intitule column
 * @method CommonExecReceptionQuery groupByNumero() Group by the numero column
 * @method CommonExecReceptionQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecReceptionQuery groupByIdContractant() Group by the id_contractant column
 * @method CommonExecReceptionQuery groupByStatut() Group by the statut column
 * @method CommonExecReceptionQuery groupByDateReception() Group by the date_reception column
 * @method CommonExecReceptionQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecReceptionQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecReceptionQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecReceptionQuery groupByIdAgentRejet() Group by the id_agent_rejet column
 * @method CommonExecReceptionQuery groupByCommentaire() Group by the commentaire column
 * @method CommonExecReceptionQuery groupByOriginePiece() Group by the origine_piece column
 * @method CommonExecReceptionQuery groupByNumeroWorkflow() Group by the numero_workflow column
 * @method CommonExecReceptionQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecReceptionQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecReceptionQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonExecReceptionQuery groupByOrigine() Group by the origine column
 * @method CommonExecReceptionQuery groupByIdFacture() Group by the id_facture column
 * @method CommonExecReceptionQuery groupByIdPvReception() Group by the id_pv_reception column
 * @method CommonExecReceptionQuery groupByAccepte() Group by the accepte column
 *
 * @method CommonExecReceptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecReceptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecReceptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecReceptionQuery leftJoinCommonExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecReceptionQuery rightJoinCommonExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecReceptionQuery innerJoinCommonExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFacture relation
 *
 * @method CommonExecReceptionQuery leftJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 * @method CommonExecReceptionQuery rightJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 * @method CommonExecReceptionQuery innerJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 *
 * @method CommonExecReceptionQuery leftJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 * @method CommonExecReceptionQuery rightJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 * @method CommonExecReceptionQuery innerJoinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
 *
 * @method CommonExecReceptionQuery leftJoinCommonExecReceptionPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecReceptionPrix relation
 * @method CommonExecReceptionQuery rightJoinCommonExecReceptionPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecReceptionPrix relation
 * @method CommonExecReceptionQuery innerJoinCommonExecReceptionPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecReceptionPrix relation
 *
 * @method CommonExecReception findOne(PropelPDO $con = null) Return the first CommonExecReception matching the query
 * @method CommonExecReception findOneOrCreate(PropelPDO $con = null) Return the first CommonExecReception matching the query, or a new CommonExecReception object populated from the query conditions when no match is found
 *
 * @method CommonExecReception findOneByIntitule(string $intitule) Return the first CommonExecReception filtered by the intitule column
 * @method CommonExecReception findOneByNumero(string $numero) Return the first CommonExecReception filtered by the numero column
 * @method CommonExecReception findOneByIdContrat(int $id_contrat) Return the first CommonExecReception filtered by the id_contrat column
 * @method CommonExecReception findOneByIdContractant(int $id_contractant) Return the first CommonExecReception filtered by the id_contractant column
 * @method CommonExecReception findOneByStatut(int $statut) Return the first CommonExecReception filtered by the statut column
 * @method CommonExecReception findOneByDateReception(string $date_reception) Return the first CommonExecReception filtered by the date_reception column
 * @method CommonExecReception findOneByDateValidation(string $date_validation) Return the first CommonExecReception filtered by the date_validation column
 * @method CommonExecReception findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecReception filtered by the id_agent_validation column
 * @method CommonExecReception findOneByDateRejet(string $date_rejet) Return the first CommonExecReception filtered by the date_rejet column
 * @method CommonExecReception findOneByIdAgentRejet(int $id_agent_rejet) Return the first CommonExecReception filtered by the id_agent_rejet column
 * @method CommonExecReception findOneByCommentaire(string $commentaire) Return the first CommonExecReception filtered by the commentaire column
 * @method CommonExecReception findOneByOriginePiece(int $origine_piece) Return the first CommonExecReception filtered by the origine_piece column
 * @method CommonExecReception findOneByNumeroWorkflow(string $numero_workflow) Return the first CommonExecReception filtered by the numero_workflow column
 * @method CommonExecReception findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecReception filtered by the id_agent_crea column
 * @method CommonExecReception findOneByDateCrea(string $date_crea) Return the first CommonExecReception filtered by the date_crea column
 * @method CommonExecReception findOneByMotifRejet(string $motif_rejet) Return the first CommonExecReception filtered by the motif_rejet column
 * @method CommonExecReception findOneByOrigine(boolean $origine) Return the first CommonExecReception filtered by the origine column
 * @method CommonExecReception findOneByIdFacture(int $id_facture) Return the first CommonExecReception filtered by the id_facture column
 * @method CommonExecReception findOneByIdPvReception(int $id_pv_reception) Return the first CommonExecReception filtered by the id_pv_reception column
 * @method CommonExecReception findOneByAccepte(boolean $accepte) Return the first CommonExecReception filtered by the accepte column
 *
 * @method array findById(int $id) Return CommonExecReception objects filtered by the id column
 * @method array findByIntitule(string $intitule) Return CommonExecReception objects filtered by the intitule column
 * @method array findByNumero(string $numero) Return CommonExecReception objects filtered by the numero column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecReception objects filtered by the id_contrat column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecReception objects filtered by the id_contractant column
 * @method array findByStatut(int $statut) Return CommonExecReception objects filtered by the statut column
 * @method array findByDateReception(string $date_reception) Return CommonExecReception objects filtered by the date_reception column
 * @method array findByDateValidation(string $date_validation) Return CommonExecReception objects filtered by the date_validation column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecReception objects filtered by the id_agent_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecReception objects filtered by the date_rejet column
 * @method array findByIdAgentRejet(int $id_agent_rejet) Return CommonExecReception objects filtered by the id_agent_rejet column
 * @method array findByCommentaire(string $commentaire) Return CommonExecReception objects filtered by the commentaire column
 * @method array findByOriginePiece(int $origine_piece) Return CommonExecReception objects filtered by the origine_piece column
 * @method array findByNumeroWorkflow(string $numero_workflow) Return CommonExecReception objects filtered by the numero_workflow column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecReception objects filtered by the id_agent_crea column
 * @method array findByDateCrea(string $date_crea) Return CommonExecReception objects filtered by the date_crea column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonExecReception objects filtered by the motif_rejet column
 * @method array findByOrigine(boolean $origine) Return CommonExecReception objects filtered by the origine column
 * @method array findByIdFacture(int $id_facture) Return CommonExecReception objects filtered by the id_facture column
 * @method array findByIdPvReception(int $id_pv_reception) Return CommonExecReception objects filtered by the id_pv_reception column
 * @method array findByAccepte(boolean $accepte) Return CommonExecReception objects filtered by the accepte column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecReceptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecReceptionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecReception', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecReceptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecReceptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecReceptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecReceptionQuery) {
            return $criteria;
        }
        $query = new CommonExecReceptionQuery();
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
     * @return   CommonExecReception|CommonExecReception[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecReceptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecReception A model object, or null if the key is not found
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
     * @return                 CommonExecReception A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `intitule`, `numero`, `id_contrat`, `id_contractant`, `statut`, `date_reception`, `date_validation`, `id_agent_validation`, `date_rejet`, `id_agent_rejet`, `commentaire`, `origine_piece`, `numero_workflow`, `id_agent_crea`, `date_crea`, `motif_rejet`, `origine`, `id_facture`, `id_pv_reception`, `accepte` FROM `exec_reception` WHERE `id` = :p0';
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
            $obj = new CommonExecReception();
            $obj->hydrate($row);
            CommonExecReceptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecReception|CommonExecReception[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecReception[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecReceptionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecReceptionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_contractant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContractant(1234); // WHERE id_contractant = 1234
     * $query->filterByIdContractant(array(12, 34)); // WHERE id_contractant IN (12, 34)
     * $query->filterByIdContractant(array('min' => 12)); // WHERE id_contractant >= 12
     * $query->filterByIdContractant(array('max' => 12)); // WHERE id_contractant <= 12
     * </code>
     *
     * @param     mixed $idContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_CONTRACTANT, $idContractant, $comparison);
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
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReception('2011-03-14'); // WHERE date_reception = '2011-03-14'
     * $query->filterByDateReception('now'); // WHERE date_reception = '2011-03-14'
     * $query->filterByDateReception(array('max' => 'yesterday')); // WHERE date_reception > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReception The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByDateReception($dateReception = null, $comparison = null)
    {
        if (is_array($dateReception)) {
            $useMinMax = false;
            if (isset($dateReception['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_RECEPTION, $dateReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReception['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_RECEPTION, $dateReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::DATE_RECEPTION, $dateReception, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE date_validation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the id_agent_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidation(1234); // WHERE id_agent_validation = 1234
     * $query->filterByIdAgentValidation(array(12, 34)); // WHERE id_agent_validation IN (12, 34)
     * $query->filterByIdAgentValidation(array('min' => 12)); // WHERE id_agent_validation >= 12
     * $query->filterByIdAgentValidation(array('max' => 12)); // WHERE id_agent_validation <= 12
     * </code>
     *
     * @param     mixed $idAgentValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
    }

    /**
     * Filter the query on the date_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejet('2011-03-14'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet('now'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet(array('max' => 'yesterday')); // WHERE date_rejet > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejet The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::DATE_REJET, $dateRejet, $comparison);
    }

    /**
     * Filter the query on the id_agent_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRejet(1234); // WHERE id_agent_rejet = 1234
     * $query->filterByIdAgentRejet(array(12, 34)); // WHERE id_agent_rejet IN (12, 34)
     * $query->filterByIdAgentRejet(array('min' => 12)); // WHERE id_agent_rejet >= 12
     * $query->filterByIdAgentRejet(array('max' => 12)); // WHERE id_agent_rejet <= 12
     * </code>
     *
     * @param     mixed $idAgentRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdAgentRejet($idAgentRejet = null, $comparison = null)
    {
        if (is_array($idAgentRejet)) {
            $useMinMax = false;
            if (isset($idAgentRejet['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_REJET, $idAgentRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRejet['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_REJET, $idAgentRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_REJET, $idAgentRejet, $comparison);
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
     * @return CommonExecReceptionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecReceptionPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the origine_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginePiece(1234); // WHERE origine_piece = 1234
     * $query->filterByOriginePiece(array(12, 34)); // WHERE origine_piece IN (12, 34)
     * $query->filterByOriginePiece(array('min' => 12)); // WHERE origine_piece >= 12
     * $query->filterByOriginePiece(array('max' => 12)); // WHERE origine_piece <= 12
     * </code>
     *
     * @param     mixed $originePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByOriginePiece($originePiece = null, $comparison = null)
    {
        if (is_array($originePiece)) {
            $useMinMax = false;
            if (isset($originePiece['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ORIGINE_PIECE, $originePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originePiece['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ORIGINE_PIECE, $originePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ORIGINE_PIECE, $originePiece, $comparison);
    }

    /**
     * Filter the query on the numero_workflow column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroWorkflow('fooValue');   // WHERE numero_workflow = 'fooValue'
     * $query->filterByNumeroWorkflow('%fooValue%'); // WHERE numero_workflow LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroWorkflow The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByNumeroWorkflow($numeroWorkflow = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroWorkflow)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroWorkflow)) {
                $numeroWorkflow = str_replace('*', '%', $numeroWorkflow);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::NUMERO_WORKFLOW, $numeroWorkflow, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the motif_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejet('fooValue');   // WHERE motif_rejet = 'fooValue'
     * $query->filterByMotifRejet('%fooValue%'); // WHERE motif_rejet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByMotifRejet($motifRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejet)) {
                $motifRejet = str_replace('*', '%', $motifRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::MOTIF_REJET, $motifRejet, $comparison);
    }

    /**
     * Filter the query on the origine column
     *
     * Example usage:
     * <code>
     * $query->filterByOrigine(true); // WHERE origine = true
     * $query->filterByOrigine('yes'); // WHERE origine = true
     * </code>
     *
     * @param     boolean|string $origine The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByOrigine($origine = null, $comparison = null)
    {
        if (is_string($origine)) {
            $origine = in_array(strtolower($origine), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ORIGINE, $origine, $comparison);
    }

    /**
     * Filter the query on the id_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFacture(1234); // WHERE id_facture = 1234
     * $query->filterByIdFacture(array(12, 34)); // WHERE id_facture IN (12, 34)
     * $query->filterByIdFacture(array('min' => 12)); // WHERE id_facture >= 12
     * $query->filterByIdFacture(array('max' => 12)); // WHERE id_facture <= 12
     * </code>
     *
     * @see       filterByCommonExecFacture()
     *
     * @param     mixed $idFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdFacture($idFacture = null, $comparison = null)
    {
        if (is_array($idFacture)) {
            $useMinMax = false;
            if (isset($idFacture['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_FACTURE, $idFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFacture['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_FACTURE, $idFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_FACTURE, $idFacture, $comparison);
    }

    /**
     * Filter the query on the id_pv_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPvReception(1234); // WHERE id_pv_reception = 1234
     * $query->filterByIdPvReception(array(12, 34)); // WHERE id_pv_reception IN (12, 34)
     * $query->filterByIdPvReception(array('min' => 12)); // WHERE id_pv_reception >= 12
     * $query->filterByIdPvReception(array('max' => 12)); // WHERE id_pv_reception <= 12
     * </code>
     *
     * @param     mixed $idPvReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByIdPvReception($idPvReception = null, $comparison = null)
    {
        if (is_array($idPvReception)) {
            $useMinMax = false;
            if (isset($idPvReception['min'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_PV_RECEPTION, $idPvReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPvReception['max'])) {
                $this->addUsingAlias(CommonExecReceptionPeer::ID_PV_RECEPTION, $idPvReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ID_PV_RECEPTION, $idPvReception, $comparison);
    }

    /**
     * Filter the query on the accepte column
     *
     * Example usage:
     * <code>
     * $query->filterByAccepte(true); // WHERE accepte = true
     * $query->filterByAccepte('yes'); // WHERE accepte = true
     * </code>
     *
     * @param     boolean|string $accepte The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function filterByAccepte($accepte = null, $comparison = null)
    {
        if (is_string($accepte)) {
            $accepte = in_array(strtolower($accepte), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecReceptionPeer::ACCEPTE, $accepte, $comparison);
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFacture($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonExecReceptionPeer::ID_FACTURE, $commonExecFacture->getId(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecReceptionPeer::ID_FACTURE, $commonExecFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecFacture() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFacture');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecFacture relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFacture', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecLitigeReception object
     *
     * @param   CommonExecLitigeReception|PropelObjectCollection $commonExecLitigeReception  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReception, $comparison = null)
    {
        if ($commonExecLitigeReception instanceof CommonExecLitigeReception) {
            return $this
                ->addUsingAlias(CommonExecReceptionPeer::ID, $commonExecLitigeReception->getIdReception(), $comparison);
        } elseif ($commonExecLitigeReception instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecLitigeReceptionRelatedByIdReceptionQuery()
                ->filterByPrimaryKeys($commonExecLitigeReception->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecLitigeReceptionRelatedByIdReception() only accepts arguments of type CommonExecLitigeReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecLitigeReceptionRelatedByIdReception');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecLitigeReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecLitigeReceptionRelatedByIdReception relation CommonExecLitigeReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecLitigeReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecLitigeReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecLitigeReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecLitigeReceptionRelatedByIdReception', 'CommonExecLitigeReceptionQuery');
    }

    /**
     * Filter the query by a related CommonExecLitigeReception object
     *
     * @param   CommonExecLitigeReception|PropelObjectCollection $commonExecLitigeReception  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReception, $comparison = null)
    {
        if ($commonExecLitigeReception instanceof CommonExecLitigeReception) {
            return $this
                ->addUsingAlias(CommonExecReceptionPeer::ID, $commonExecLitigeReception->getIdReception(), $comparison);
        } elseif ($commonExecLitigeReception instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecLitigeReceptionRelatedByIdReceptionQuery()
                ->filterByPrimaryKeys($commonExecLitigeReception->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecLitigeReceptionRelatedByIdReception() only accepts arguments of type CommonExecLitigeReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecLitigeReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecLitigeReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecLitigeReceptionRelatedByIdReception');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecLitigeReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecLitigeReceptionRelatedByIdReception relation CommonExecLitigeReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecLitigeReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecLitigeReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecLitigeReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecLitigeReceptionRelatedByIdReception', 'CommonExecLitigeReceptionQuery');
    }

    /**
     * Filter the query by a related CommonExecReceptionPrix object
     *
     * @param   CommonExecReceptionPrix|PropelObjectCollection $commonExecReceptionPrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecReceptionPrix($commonExecReceptionPrix, $comparison = null)
    {
        if ($commonExecReceptionPrix instanceof CommonExecReceptionPrix) {
            return $this
                ->addUsingAlias(CommonExecReceptionPeer::ID, $commonExecReceptionPrix->getIdReception(), $comparison);
        } elseif ($commonExecReceptionPrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecReceptionPrixQuery()
                ->filterByPrimaryKeys($commonExecReceptionPrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecReceptionPrix() only accepts arguments of type CommonExecReceptionPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecReceptionPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecReceptionPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecReceptionPrix');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecReceptionPrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecReceptionPrix relation CommonExecReceptionPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecReceptionPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecReceptionPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecReceptionPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecReceptionPrix', 'CommonExecReceptionPrixQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecReception $commonExecReception Object to remove from the list of results
     *
     * @return CommonExecReceptionQuery The current query, for fluid interface
     */
    public function prune($commonExecReception = null)
    {
        if ($commonExecReception) {
            $this->addUsingAlias(CommonExecReceptionPeer::ID, $commonExecReception->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
