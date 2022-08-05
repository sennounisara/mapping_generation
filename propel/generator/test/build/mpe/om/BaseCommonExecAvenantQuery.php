<?php


/**
 * Base class that represents a query for the 'exec_avenant' table.
 *
 * 
 *
 * @method CommonExecAvenantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecAvenantQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecAvenantQuery orderByIdTypeAvenant($order = Criteria::ASC) Order by the id_type_avenant column
 * @method CommonExecAvenantQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecAvenantQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecAvenantQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 * @method CommonExecAvenantQuery orderByIncidenceFinanciere($order = Criteria::ASC) Order by the incidence_financiere column
 * @method CommonExecAvenantQuery orderByPositif($order = Criteria::ASC) Order by the positif column
 * @method CommonExecAvenantQuery orderByMontantEcartHt($order = Criteria::ASC) Order by the montant_ecart_ht column
 * @method CommonExecAvenantQuery orderByMontantEcartTtc($order = Criteria::ASC) Order by the montant_ecart_ttc column
 * @method CommonExecAvenantQuery orderByPourcentageEcart($order = Criteria::ASC) Order by the pourcentage_ecart column
 * @method CommonExecAvenantQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecAvenantQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecAvenantQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecAvenantQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecAvenantQuery orderByIdAgentRejet($order = Criteria::ASC) Order by the id_agent_rejet column
 * @method CommonExecAvenantQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecAvenantQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecAvenantQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecAvenantQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecAvenantQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonExecAvenantQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method CommonExecAvenantQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonExecAvenantQuery orderByDateDerniereSynchronisation($order = Criteria::ASC) Order by the date_derniere_synchronisation column
 *
 * @method CommonExecAvenantQuery groupById() Group by the id column
 * @method CommonExecAvenantQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecAvenantQuery groupByIdTypeAvenant() Group by the id_type_avenant column
 * @method CommonExecAvenantQuery groupByNumero() Group by the numero column
 * @method CommonExecAvenantQuery groupByIntitule() Group by the intitule column
 * @method CommonExecAvenantQuery groupByDateNotification() Group by the date_notification column
 * @method CommonExecAvenantQuery groupByIncidenceFinanciere() Group by the incidence_financiere column
 * @method CommonExecAvenantQuery groupByPositif() Group by the positif column
 * @method CommonExecAvenantQuery groupByMontantEcartHt() Group by the montant_ecart_ht column
 * @method CommonExecAvenantQuery groupByMontantEcartTtc() Group by the montant_ecart_ttc column
 * @method CommonExecAvenantQuery groupByPourcentageEcart() Group by the pourcentage_ecart column
 * @method CommonExecAvenantQuery groupByStatut() Group by the statut column
 * @method CommonExecAvenantQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecAvenantQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecAvenantQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecAvenantQuery groupByIdAgentRejet() Group by the id_agent_rejet column
 * @method CommonExecAvenantQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecAvenantQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecAvenantQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecAvenantQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecAvenantQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonExecAvenantQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method CommonExecAvenantQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonExecAvenantQuery groupByDateDerniereSynchronisation() Group by the date_derniere_synchronisation column
 *
 * @method CommonExecAvenantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecAvenantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecAvenantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecAvenantQuery leftJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 * @method CommonExecAvenantQuery rightJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 * @method CommonExecAvenantQuery innerJoinCommonAgentRelatedByIdAgentCrea($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 * @method CommonExecAvenantQuery rightJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 * @method CommonExecAvenantQuery innerJoinCommonAgentRelatedByIdAgentModif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonAgentRelatedByIdAgentRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentRejet relation
 * @method CommonExecAvenantQuery rightJoinCommonAgentRelatedByIdAgentRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentRejet relation
 * @method CommonExecAvenantQuery innerJoinCommonAgentRelatedByIdAgentRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentRejet relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonAgentRelatedByIdAgentValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentRelatedByIdAgentValidation relation
 * @method CommonExecAvenantQuery rightJoinCommonAgentRelatedByIdAgentValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentRelatedByIdAgentValidation relation
 * @method CommonExecAvenantQuery innerJoinCommonAgentRelatedByIdAgentValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentRelatedByIdAgentValidation relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecAvenantQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecAvenantQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonExecTypeAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeAvenant relation
 * @method CommonExecAvenantQuery rightJoinCommonExecTypeAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeAvenant relation
 * @method CommonExecAvenantQuery innerJoinCommonExecTypeAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeAvenant relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonExecHistoriquePrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecHistoriquePrix relation
 * @method CommonExecAvenantQuery rightJoinCommonExecHistoriquePrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecHistoriquePrix relation
 * @method CommonExecAvenantQuery innerJoinCommonExecHistoriquePrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecHistoriquePrix relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonExecPieceAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonExecAvenantQuery rightJoinCommonExecPieceAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceAvenant relation
 * @method CommonExecAvenantQuery innerJoinCommonExecPieceAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceAvenant relation
 *
 * @method CommonExecAvenantQuery leftJoinCommonExecPrixAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrixAvenant relation
 * @method CommonExecAvenantQuery rightJoinCommonExecPrixAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrixAvenant relation
 * @method CommonExecAvenantQuery innerJoinCommonExecPrixAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrixAvenant relation
 *
 * @method CommonExecAvenant findOne(PropelPDO $con = null) Return the first CommonExecAvenant matching the query
 * @method CommonExecAvenant findOneOrCreate(PropelPDO $con = null) Return the first CommonExecAvenant matching the query, or a new CommonExecAvenant object populated from the query conditions when no match is found
 *
 * @method CommonExecAvenant findOneByIdContrat(int $id_contrat) Return the first CommonExecAvenant filtered by the id_contrat column
 * @method CommonExecAvenant findOneByIdTypeAvenant(int $id_type_avenant) Return the first CommonExecAvenant filtered by the id_type_avenant column
 * @method CommonExecAvenant findOneByNumero(string $numero) Return the first CommonExecAvenant filtered by the numero column
 * @method CommonExecAvenant findOneByIntitule(string $intitule) Return the first CommonExecAvenant filtered by the intitule column
 * @method CommonExecAvenant findOneByDateNotification(string $date_notification) Return the first CommonExecAvenant filtered by the date_notification column
 * @method CommonExecAvenant findOneByIncidenceFinanciere(int $incidence_financiere) Return the first CommonExecAvenant filtered by the incidence_financiere column
 * @method CommonExecAvenant findOneByPositif(int $positif) Return the first CommonExecAvenant filtered by the positif column
 * @method CommonExecAvenant findOneByMontantEcartHt(double $montant_ecart_ht) Return the first CommonExecAvenant filtered by the montant_ecart_ht column
 * @method CommonExecAvenant findOneByMontantEcartTtc(double $montant_ecart_ttc) Return the first CommonExecAvenant filtered by the montant_ecart_ttc column
 * @method CommonExecAvenant findOneByPourcentageEcart(double $pourcentage_ecart) Return the first CommonExecAvenant filtered by the pourcentage_ecart column
 * @method CommonExecAvenant findOneByStatut(int $statut) Return the first CommonExecAvenant filtered by the statut column
 * @method CommonExecAvenant findOneByDateValidation(string $date_validation) Return the first CommonExecAvenant filtered by the date_validation column
 * @method CommonExecAvenant findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecAvenant filtered by the id_agent_validation column
 * @method CommonExecAvenant findOneByDateRejet(string $date_rejet) Return the first CommonExecAvenant filtered by the date_rejet column
 * @method CommonExecAvenant findOneByIdAgentRejet(int $id_agent_rejet) Return the first CommonExecAvenant filtered by the id_agent_rejet column
 * @method CommonExecAvenant findOneByDateCrea(string $date_crea) Return the first CommonExecAvenant filtered by the date_crea column
 * @method CommonExecAvenant findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecAvenant filtered by the id_agent_crea column
 * @method CommonExecAvenant findOneByDateModif(string $date_modif) Return the first CommonExecAvenant filtered by the date_modif column
 * @method CommonExecAvenant findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecAvenant filtered by the id_agent_modif column
 * @method CommonExecAvenant findOneByIdParapheur(int $id_parapheur) Return the first CommonExecAvenant filtered by the id_parapheur column
 * @method CommonExecAvenant findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first CommonExecAvenant filtered by the date_cloture_parapheur column
 * @method CommonExecAvenant findOneByMotifRejet(string $motif_rejet) Return the first CommonExecAvenant filtered by the motif_rejet column
 * @method CommonExecAvenant findOneByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return the first CommonExecAvenant filtered by the date_derniere_synchronisation column
 *
 * @method array findById(int $id) Return CommonExecAvenant objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecAvenant objects filtered by the id_contrat column
 * @method array findByIdTypeAvenant(int $id_type_avenant) Return CommonExecAvenant objects filtered by the id_type_avenant column
 * @method array findByNumero(string $numero) Return CommonExecAvenant objects filtered by the numero column
 * @method array findByIntitule(string $intitule) Return CommonExecAvenant objects filtered by the intitule column
 * @method array findByDateNotification(string $date_notification) Return CommonExecAvenant objects filtered by the date_notification column
 * @method array findByIncidenceFinanciere(int $incidence_financiere) Return CommonExecAvenant objects filtered by the incidence_financiere column
 * @method array findByPositif(int $positif) Return CommonExecAvenant objects filtered by the positif column
 * @method array findByMontantEcartHt(double $montant_ecart_ht) Return CommonExecAvenant objects filtered by the montant_ecart_ht column
 * @method array findByMontantEcartTtc(double $montant_ecart_ttc) Return CommonExecAvenant objects filtered by the montant_ecart_ttc column
 * @method array findByPourcentageEcart(double $pourcentage_ecart) Return CommonExecAvenant objects filtered by the pourcentage_ecart column
 * @method array findByStatut(int $statut) Return CommonExecAvenant objects filtered by the statut column
 * @method array findByDateValidation(string $date_validation) Return CommonExecAvenant objects filtered by the date_validation column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecAvenant objects filtered by the id_agent_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecAvenant objects filtered by the date_rejet column
 * @method array findByIdAgentRejet(int $id_agent_rejet) Return CommonExecAvenant objects filtered by the id_agent_rejet column
 * @method array findByDateCrea(string $date_crea) Return CommonExecAvenant objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecAvenant objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecAvenant objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecAvenant objects filtered by the id_agent_modif column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonExecAvenant objects filtered by the id_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return CommonExecAvenant objects filtered by the date_cloture_parapheur column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonExecAvenant objects filtered by the motif_rejet column
 * @method array findByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return CommonExecAvenant objects filtered by the date_derniere_synchronisation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecAvenantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecAvenantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecAvenant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecAvenantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecAvenantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecAvenantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecAvenantQuery) {
            return $criteria;
        }
        $query = new CommonExecAvenantQuery();
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
     * @return   CommonExecAvenant|CommonExecAvenant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecAvenantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecAvenant A model object, or null if the key is not found
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
     * @return                 CommonExecAvenant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_type_avenant`, `numero`, `intitule`, `date_notification`, `incidence_financiere`, `positif`, `montant_ecart_ht`, `montant_ecart_ttc`, `pourcentage_ecart`, `statut`, `date_validation`, `id_agent_validation`, `date_rejet`, `id_agent_rejet`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif`, `id_parapheur`, `date_cloture_parapheur`, `motif_rejet`, `date_derniere_synchronisation` FROM `exec_avenant` WHERE `id` = :p0';
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
            $obj = new CommonExecAvenant();
            $obj->hydrate($row);
            CommonExecAvenantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecAvenant|CommonExecAvenant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecAvenant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecAvenantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecAvenantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID, $id, $comparison);
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
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_type_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvenant(1234); // WHERE id_type_avenant = 1234
     * $query->filterByIdTypeAvenant(array(12, 34)); // WHERE id_type_avenant IN (12, 34)
     * $query->filterByIdTypeAvenant(array('min' => 12)); // WHERE id_type_avenant >= 12
     * $query->filterByIdTypeAvenant(array('max' => 12)); // WHERE id_type_avenant <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeAvenant()
     *
     * @param     mixed $idTypeAvenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvenant($idTypeAvenant = null, $comparison = null)
    {
        if (is_array($idTypeAvenant)) {
            $useMinMax = false;
            if (isset($idTypeAvenant['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_TYPE_AVENANT, $idTypeAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvenant['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_TYPE_AVENANT, $idTypeAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_TYPE_AVENANT, $idTypeAvenant, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecAvenantPeer::NUMERO, $numero, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecAvenantPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotification('2011-03-14'); // WHERE date_notification = '2011-03-14'
     * $query->filterByDateNotification('now'); // WHERE date_notification = '2011-03-14'
     * $query->filterByDateNotification(array('max' => 'yesterday')); // WHERE date_notification > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateNotification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateNotification($dateNotification = null, $comparison = null)
    {
        if (is_array($dateNotification)) {
            $useMinMax = false;
            if (isset($dateNotification['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_NOTIFICATION, $dateNotification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateNotification['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_NOTIFICATION, $dateNotification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Filter the query on the incidence_financiere column
     *
     * Example usage:
     * <code>
     * $query->filterByIncidenceFinanciere(1234); // WHERE incidence_financiere = 1234
     * $query->filterByIncidenceFinanciere(array(12, 34)); // WHERE incidence_financiere IN (12, 34)
     * $query->filterByIncidenceFinanciere(array('min' => 12)); // WHERE incidence_financiere >= 12
     * $query->filterByIncidenceFinanciere(array('max' => 12)); // WHERE incidence_financiere <= 12
     * </code>
     *
     * @param     mixed $incidenceFinanciere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIncidenceFinanciere($incidenceFinanciere = null, $comparison = null)
    {
        if (is_array($incidenceFinanciere)) {
            $useMinMax = false;
            if (isset($incidenceFinanciere['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::INCIDENCE_FINANCIERE, $incidenceFinanciere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($incidenceFinanciere['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::INCIDENCE_FINANCIERE, $incidenceFinanciere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::INCIDENCE_FINANCIERE, $incidenceFinanciere, $comparison);
    }

    /**
     * Filter the query on the positif column
     *
     * Example usage:
     * <code>
     * $query->filterByPositif(1234); // WHERE positif = 1234
     * $query->filterByPositif(array(12, 34)); // WHERE positif IN (12, 34)
     * $query->filterByPositif(array('min' => 12)); // WHERE positif >= 12
     * $query->filterByPositif(array('max' => 12)); // WHERE positif <= 12
     * </code>
     *
     * @param     mixed $positif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByPositif($positif = null, $comparison = null)
    {
        if (is_array($positif)) {
            $useMinMax = false;
            if (isset($positif['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::POSITIF, $positif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($positif['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::POSITIF, $positif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::POSITIF, $positif, $comparison);
    }

    /**
     * Filter the query on the montant_ecart_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantEcartHt(1234); // WHERE montant_ecart_ht = 1234
     * $query->filterByMontantEcartHt(array(12, 34)); // WHERE montant_ecart_ht IN (12, 34)
     * $query->filterByMontantEcartHt(array('min' => 12)); // WHERE montant_ecart_ht >= 12
     * $query->filterByMontantEcartHt(array('max' => 12)); // WHERE montant_ecart_ht <= 12
     * </code>
     *
     * @param     mixed $montantEcartHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByMontantEcartHt($montantEcartHt = null, $comparison = null)
    {
        if (is_array($montantEcartHt)) {
            $useMinMax = false;
            if (isset($montantEcartHt['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_HT, $montantEcartHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantEcartHt['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_HT, $montantEcartHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_HT, $montantEcartHt, $comparison);
    }

    /**
     * Filter the query on the montant_ecart_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantEcartTtc(1234); // WHERE montant_ecart_ttc = 1234
     * $query->filterByMontantEcartTtc(array(12, 34)); // WHERE montant_ecart_ttc IN (12, 34)
     * $query->filterByMontantEcartTtc(array('min' => 12)); // WHERE montant_ecart_ttc >= 12
     * $query->filterByMontantEcartTtc(array('max' => 12)); // WHERE montant_ecart_ttc <= 12
     * </code>
     *
     * @param     mixed $montantEcartTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByMontantEcartTtc($montantEcartTtc = null, $comparison = null)
    {
        if (is_array($montantEcartTtc)) {
            $useMinMax = false;
            if (isset($montantEcartTtc['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_TTC, $montantEcartTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantEcartTtc['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_TTC, $montantEcartTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::MONTANT_ECART_TTC, $montantEcartTtc, $comparison);
    }

    /**
     * Filter the query on the pourcentage_ecart column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageEcart(1234); // WHERE pourcentage_ecart = 1234
     * $query->filterByPourcentageEcart(array(12, 34)); // WHERE pourcentage_ecart IN (12, 34)
     * $query->filterByPourcentageEcart(array('min' => 12)); // WHERE pourcentage_ecart >= 12
     * $query->filterByPourcentageEcart(array('max' => 12)); // WHERE pourcentage_ecart <= 12
     * </code>
     *
     * @param     mixed $pourcentageEcart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByPourcentageEcart($pourcentageEcart = null, $comparison = null)
    {
        if (is_array($pourcentageEcart)) {
            $useMinMax = false;
            if (isset($pourcentageEcart['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::POURCENTAGE_ECART, $pourcentageEcart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageEcart['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::POURCENTAGE_ECART, $pourcentageEcart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::POURCENTAGE_ECART, $pourcentageEcart, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::STATUT, $statut, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_VALIDATION, $dateValidation, $comparison);
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
     * @see       filterByCommonAgentRelatedByIdAgentValidation()
     *
     * @param     mixed $idAgentValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_REJET, $dateRejet, $comparison);
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
     * @see       filterByCommonAgentRelatedByIdAgentRejet()
     *
     * @param     mixed $idAgentRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAgentRejet($idAgentRejet = null, $comparison = null)
    {
        if (is_array($idAgentRejet)) {
            $useMinMax = false;
            if (isset($idAgentRejet['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_REJET, $idAgentRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRejet['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_REJET, $idAgentRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_REJET, $idAgentRejet, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @see       filterByCommonAgentRelatedByIdAgentCrea()
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE date_modif > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @see       filterByCommonAgentRelatedByIdAgentModif()
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the id_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParapheur(1234); // WHERE id_parapheur = 1234
     * $query->filterByIdParapheur(array(12, 34)); // WHERE id_parapheur IN (12, 34)
     * $query->filterByIdParapheur(array('min' => 12)); // WHERE id_parapheur >= 12
     * $query->filterByIdParapheur(array('max' => 12)); // WHERE id_parapheur <= 12
     * </code>
     *
     * @param     mixed $idParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::ID_PARAPHEUR, $idParapheur, $comparison);
    }

    /**
     * Filter the query on the date_cloture_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateClotureParapheur('2011-03-14'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur('now'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur(array('max' => 'yesterday')); // WHERE date_cloture_parapheur > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateClotureParapheur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
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
     * @return CommonExecAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecAvenantPeer::MOTIF_REJET, $motifRejet, $comparison);
    }

    /**
     * Filter the query on the date_derniere_synchronisation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDerniereSynchronisation('2011-03-14'); // WHERE date_derniere_synchronisation = '2011-03-14'
     * $query->filterByDateDerniereSynchronisation('now'); // WHERE date_derniere_synchronisation = '2011-03-14'
     * $query->filterByDateDerniereSynchronisation(array('max' => 'yesterday')); // WHERE date_derniere_synchronisation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDerniereSynchronisation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function filterByDateDerniereSynchronisation($dateDerniereSynchronisation = null, $comparison = null)
    {
        if (is_array($dateDerniereSynchronisation)) {
            $useMinMax = false;
            if (isset($dateDerniereSynchronisation['min'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereSynchronisation['max'])) {
                $this->addUsingAlias(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecAvenantPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation, $comparison);
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentCrea($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_CREA, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_CREA, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentCrea() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentCrea relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentCrea($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentCrea');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentCrea');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentCrea relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentCreaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentCrea($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentCrea', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentModif($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_MODIF, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_MODIF, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentModif() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentModif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentModif($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentModif');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentModif');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentModif relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentModifQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentModif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentModif', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentRejet($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_REJET, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_REJET, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentRejet() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentRejet');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentRejet');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentRejet relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentRejet', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentRelatedByIdAgentValidation($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_AGENT_VALIDATION, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgentRelatedByIdAgentValidation() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentRelatedByIdAgentValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonAgentRelatedByIdAgentValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentRelatedByIdAgentValidation');

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
            $this->addJoinObject($join, 'CommonAgentRelatedByIdAgentValidation');
        }

        return $this;
    }

    /**
     * Use the CommonAgentRelatedByIdAgentValidation relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentRelatedByIdAgentValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonAgentRelatedByIdAgentValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentRelatedByIdAgentValidation', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

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
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeAvenant object
     *
     * @param   CommonExecTypeAvenant|PropelObjectCollection $commonExecTypeAvenant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeAvenant($commonExecTypeAvenant, $comparison = null)
    {
        if ($commonExecTypeAvenant instanceof CommonExecTypeAvenant) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_TYPE_AVENANT, $commonExecTypeAvenant->getId(), $comparison);
        } elseif ($commonExecTypeAvenant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID_TYPE_AVENANT, $commonExecTypeAvenant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeAvenant() only accepts arguments of type CommonExecTypeAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeAvenant($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeAvenant');

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
            $this->addJoinObject($join, 'CommonExecTypeAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeAvenant relation CommonExecTypeAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeAvenantQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecTypeAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeAvenant', 'CommonExecTypeAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecHistoriquePrix object
     *
     * @param   CommonExecHistoriquePrix|PropelObjectCollection $commonExecHistoriquePrix  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecHistoriquePrix($commonExecHistoriquePrix, $comparison = null)
    {
        if ($commonExecHistoriquePrix instanceof CommonExecHistoriquePrix) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID, $commonExecHistoriquePrix->getIdAvenant(), $comparison);
        } elseif ($commonExecHistoriquePrix instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecHistoriquePrixQuery()
                ->filterByPrimaryKeys($commonExecHistoriquePrix->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecHistoriquePrix() only accepts arguments of type CommonExecHistoriquePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecHistoriquePrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecHistoriquePrix($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecHistoriquePrix');

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
            $this->addJoinObject($join, 'CommonExecHistoriquePrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecHistoriquePrix relation CommonExecHistoriquePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecHistoriquePrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecHistoriquePrixQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecHistoriquePrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecHistoriquePrix', 'CommonExecHistoriquePrixQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceAvenant object
     *
     * @param   CommonExecPieceAvenant|PropelObjectCollection $commonExecPieceAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceAvenant($commonExecPieceAvenant, $comparison = null)
    {
        if ($commonExecPieceAvenant instanceof CommonExecPieceAvenant) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID, $commonExecPieceAvenant->getIdAvenant(), $comparison);
        } elseif ($commonExecPieceAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceAvenantQuery()
                ->filterByPrimaryKeys($commonExecPieceAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceAvenant() only accepts arguments of type CommonExecPieceAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceAvenant');

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
            $this->addJoinObject($join, 'CommonExecPieceAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceAvenant relation CommonExecPieceAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceAvenant', 'CommonExecPieceAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecPrixAvenant object
     *
     * @param   CommonExecPrixAvenant|PropelObjectCollection $commonExecPrixAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrixAvenant($commonExecPrixAvenant, $comparison = null)
    {
        if ($commonExecPrixAvenant instanceof CommonExecPrixAvenant) {
            return $this
                ->addUsingAlias(CommonExecAvenantPeer::ID, $commonExecPrixAvenant->getIdAvenant(), $comparison);
        } elseif ($commonExecPrixAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPrixAvenantQuery()
                ->filterByPrimaryKeys($commonExecPrixAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPrixAvenant() only accepts arguments of type CommonExecPrixAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrixAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecPrixAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrixAvenant');

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
            $this->addJoinObject($join, 'CommonExecPrixAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrixAvenant relation CommonExecPrixAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrixAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrixAvenant', 'CommonExecPrixAvenantQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecAvenant $commonExecAvenant Object to remove from the list of results
     *
     * @return CommonExecAvenantQuery The current query, for fluid interface
     */
    public function prune($commonExecAvenant = null)
    {
        if ($commonExecAvenant) {
            $this->addUsingAlias(CommonExecAvenantPeer::ID, $commonExecAvenant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
