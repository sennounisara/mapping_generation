<?php


/**
 * Base class that represents a query for the 'exec_facture' table.
 *
 * 
 *
 * @method CommonExecFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecFactureQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecFactureQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecFactureQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecFactureQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 * @method CommonExecFactureQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecFactureQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonExecFactureQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecFactureQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecFactureQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecFactureQuery orderByIdAgentRejet($order = Criteria::ASC) Order by the id_agent_rejet column
 * @method CommonExecFactureQuery orderByMontantFactureHt($order = Criteria::ASC) Order by the montant_facture_ht column
 * @method CommonExecFactureQuery orderByMontantFactureTtc($order = Criteria::ASC) Order by the montant_facture_ttc column
 * @method CommonExecFactureQuery orderByMontantAPayeHt($order = Criteria::ASC) Order by the montant_a_paye_ht column
 * @method CommonExecFactureQuery orderByMontantAPayeTtc($order = Criteria::ASC) Order by the montant_a_paye_ttc column
 * @method CommonExecFactureQuery orderByMontantPayeHt($order = Criteria::ASC) Order by the montant_paye_ht column
 * @method CommonExecFactureQuery orderByMontantPayeTtc($order = Criteria::ASC) Order by the montant_paye_ttc column
 * @method CommonExecFactureQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonExecFactureQuery orderByOriginePiece($order = Criteria::ASC) Order by the origine_piece column
 * @method CommonExecFactureQuery orderByNumeroWorkflow($order = Criteria::ASC) Order by the numero_workflow column
 * @method CommonExecFactureQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecFactureQuery orderByIdEntrepriseCrea($order = Criteria::ASC) Order by the id_entreprise_crea column
 * @method CommonExecFactureQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecFactureQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecFactureQuery orderByIdEntrepriseModif($order = Criteria::ASC) Order by the id_entreprise_modif column
 * @method CommonExecFactureQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecFactureQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonExecFactureQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method CommonExecFactureQuery orderByMontantRetenueGarantie($order = Criteria::ASC) Order by the montant_retenue_garantie column
 * @method CommonExecFactureQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonExecFactureQuery orderByOrigine($order = Criteria::ASC) Order by the origine column
 * @method CommonExecFactureQuery orderByValidationViaExec($order = Criteria::ASC) Order by the validation_via_exec column
 * @method CommonExecFactureQuery orderByDatePaiement($order = Criteria::ASC) Order by the date_paiement column
 * @method CommonExecFactureQuery orderByDateDerniereSynchronisation($order = Criteria::ASC) Order by the date_derniere_synchronisation column
 *
 * @method CommonExecFactureQuery groupById() Group by the id column
 * @method CommonExecFactureQuery groupByIntitule() Group by the intitule column
 * @method CommonExecFactureQuery groupByNumero() Group by the numero column
 * @method CommonExecFactureQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecFactureQuery groupByIdContractant() Group by the id_contractant column
 * @method CommonExecFactureQuery groupByStatut() Group by the statut column
 * @method CommonExecFactureQuery groupByDateDepot() Group by the date_depot column
 * @method CommonExecFactureQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecFactureQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecFactureQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecFactureQuery groupByIdAgentRejet() Group by the id_agent_rejet column
 * @method CommonExecFactureQuery groupByMontantFactureHt() Group by the montant_facture_ht column
 * @method CommonExecFactureQuery groupByMontantFactureTtc() Group by the montant_facture_ttc column
 * @method CommonExecFactureQuery groupByMontantAPayeHt() Group by the montant_a_paye_ht column
 * @method CommonExecFactureQuery groupByMontantAPayeTtc() Group by the montant_a_paye_ttc column
 * @method CommonExecFactureQuery groupByMontantPayeHt() Group by the montant_paye_ht column
 * @method CommonExecFactureQuery groupByMontantPayeTtc() Group by the montant_paye_ttc column
 * @method CommonExecFactureQuery groupByCommentaire() Group by the commentaire column
 * @method CommonExecFactureQuery groupByOriginePiece() Group by the origine_piece column
 * @method CommonExecFactureQuery groupByNumeroWorkflow() Group by the numero_workflow column
 * @method CommonExecFactureQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecFactureQuery groupByIdEntrepriseCrea() Group by the id_entreprise_crea column
 * @method CommonExecFactureQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecFactureQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecFactureQuery groupByIdEntrepriseModif() Group by the id_entreprise_modif column
 * @method CommonExecFactureQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecFactureQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonExecFactureQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method CommonExecFactureQuery groupByMontantRetenueGarantie() Group by the montant_retenue_garantie column
 * @method CommonExecFactureQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonExecFactureQuery groupByOrigine() Group by the origine column
 * @method CommonExecFactureQuery groupByValidationViaExec() Group by the validation_via_exec column
 * @method CommonExecFactureQuery groupByDatePaiement() Group by the date_paiement column
 * @method CommonExecFactureQuery groupByDateDerniereSynchronisation() Group by the date_derniere_synchronisation column
 *
 * @method CommonExecFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecFactureQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecFactureQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecFactureQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecFactureQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecFactureQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecFactureQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecFactureQuery leftJoinCommonExecDpFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDpFacture relation
 * @method CommonExecFactureQuery rightJoinCommonExecDpFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDpFacture relation
 * @method CommonExecFactureQuery innerJoinCommonExecDpFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDpFacture relation
 *
 * @method CommonExecFactureQuery leftJoinCommonExecPieceFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonExecFactureQuery rightJoinCommonExecPieceFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceFacture relation
 * @method CommonExecFactureQuery innerJoinCommonExecPieceFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceFacture relation
 *
 * @method CommonExecFactureQuery leftJoinCommonExecReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecReception relation
 * @method CommonExecFactureQuery rightJoinCommonExecReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecReception relation
 * @method CommonExecFactureQuery innerJoinCommonExecReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecReception relation
 *
 * @method CommonExecFactureQuery leftJoinCommonExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecFactureQuery rightJoinCommonExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecFactureQuery innerJoinCommonExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartition relation
 *
 * @method CommonExecFacture findOne(PropelPDO $con = null) Return the first CommonExecFacture matching the query
 * @method CommonExecFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonExecFacture matching the query, or a new CommonExecFacture object populated from the query conditions when no match is found
 *
 * @method CommonExecFacture findOneByIntitule(string $intitule) Return the first CommonExecFacture filtered by the intitule column
 * @method CommonExecFacture findOneByNumero(string $numero) Return the first CommonExecFacture filtered by the numero column
 * @method CommonExecFacture findOneByIdContrat(int $id_contrat) Return the first CommonExecFacture filtered by the id_contrat column
 * @method CommonExecFacture findOneByIdContractant(int $id_contractant) Return the first CommonExecFacture filtered by the id_contractant column
 * @method CommonExecFacture findOneByStatut(int $statut) Return the first CommonExecFacture filtered by the statut column
 * @method CommonExecFacture findOneByDateDepot(string $date_depot) Return the first CommonExecFacture filtered by the date_depot column
 * @method CommonExecFacture findOneByDateValidation(string $date_validation) Return the first CommonExecFacture filtered by the date_validation column
 * @method CommonExecFacture findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecFacture filtered by the id_agent_validation column
 * @method CommonExecFacture findOneByDateRejet(string $date_rejet) Return the first CommonExecFacture filtered by the date_rejet column
 * @method CommonExecFacture findOneByIdAgentRejet(int $id_agent_rejet) Return the first CommonExecFacture filtered by the id_agent_rejet column
 * @method CommonExecFacture findOneByMontantFactureHt(double $montant_facture_ht) Return the first CommonExecFacture filtered by the montant_facture_ht column
 * @method CommonExecFacture findOneByMontantFactureTtc(double $montant_facture_ttc) Return the first CommonExecFacture filtered by the montant_facture_ttc column
 * @method CommonExecFacture findOneByMontantAPayeHt(double $montant_a_paye_ht) Return the first CommonExecFacture filtered by the montant_a_paye_ht column
 * @method CommonExecFacture findOneByMontantAPayeTtc(double $montant_a_paye_ttc) Return the first CommonExecFacture filtered by the montant_a_paye_ttc column
 * @method CommonExecFacture findOneByMontantPayeHt(double $montant_paye_ht) Return the first CommonExecFacture filtered by the montant_paye_ht column
 * @method CommonExecFacture findOneByMontantPayeTtc(double $montant_paye_ttc) Return the first CommonExecFacture filtered by the montant_paye_ttc column
 * @method CommonExecFacture findOneByCommentaire(string $commentaire) Return the first CommonExecFacture filtered by the commentaire column
 * @method CommonExecFacture findOneByOriginePiece(int $origine_piece) Return the first CommonExecFacture filtered by the origine_piece column
 * @method CommonExecFacture findOneByNumeroWorkflow(string $numero_workflow) Return the first CommonExecFacture filtered by the numero_workflow column
 * @method CommonExecFacture findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecFacture filtered by the id_agent_crea column
 * @method CommonExecFacture findOneByIdEntrepriseCrea(int $id_entreprise_crea) Return the first CommonExecFacture filtered by the id_entreprise_crea column
 * @method CommonExecFacture findOneByDateCrea(string $date_crea) Return the first CommonExecFacture filtered by the date_crea column
 * @method CommonExecFacture findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecFacture filtered by the id_agent_modif column
 * @method CommonExecFacture findOneByIdEntrepriseModif(int $id_entreprise_modif) Return the first CommonExecFacture filtered by the id_entreprise_modif column
 * @method CommonExecFacture findOneByDateModif(string $date_modif) Return the first CommonExecFacture filtered by the date_modif column
 * @method CommonExecFacture findOneByIdParapheur(int $id_parapheur) Return the first CommonExecFacture filtered by the id_parapheur column
 * @method CommonExecFacture findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first CommonExecFacture filtered by the date_cloture_parapheur column
 * @method CommonExecFacture findOneByMontantRetenueGarantie(double $montant_retenue_garantie) Return the first CommonExecFacture filtered by the montant_retenue_garantie column
 * @method CommonExecFacture findOneByMotifRejet(string $motif_rejet) Return the first CommonExecFacture filtered by the motif_rejet column
 * @method CommonExecFacture findOneByOrigine(boolean $origine) Return the first CommonExecFacture filtered by the origine column
 * @method CommonExecFacture findOneByValidationViaExec(boolean $validation_via_exec) Return the first CommonExecFacture filtered by the validation_via_exec column
 * @method CommonExecFacture findOneByDatePaiement(string $date_paiement) Return the first CommonExecFacture filtered by the date_paiement column
 * @method CommonExecFacture findOneByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return the first CommonExecFacture filtered by the date_derniere_synchronisation column
 *
 * @method array findById(int $id) Return CommonExecFacture objects filtered by the id column
 * @method array findByIntitule(string $intitule) Return CommonExecFacture objects filtered by the intitule column
 * @method array findByNumero(string $numero) Return CommonExecFacture objects filtered by the numero column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecFacture objects filtered by the id_contrat column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecFacture objects filtered by the id_contractant column
 * @method array findByStatut(int $statut) Return CommonExecFacture objects filtered by the statut column
 * @method array findByDateDepot(string $date_depot) Return CommonExecFacture objects filtered by the date_depot column
 * @method array findByDateValidation(string $date_validation) Return CommonExecFacture objects filtered by the date_validation column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecFacture objects filtered by the id_agent_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecFacture objects filtered by the date_rejet column
 * @method array findByIdAgentRejet(int $id_agent_rejet) Return CommonExecFacture objects filtered by the id_agent_rejet column
 * @method array findByMontantFactureHt(double $montant_facture_ht) Return CommonExecFacture objects filtered by the montant_facture_ht column
 * @method array findByMontantFactureTtc(double $montant_facture_ttc) Return CommonExecFacture objects filtered by the montant_facture_ttc column
 * @method array findByMontantAPayeHt(double $montant_a_paye_ht) Return CommonExecFacture objects filtered by the montant_a_paye_ht column
 * @method array findByMontantAPayeTtc(double $montant_a_paye_ttc) Return CommonExecFacture objects filtered by the montant_a_paye_ttc column
 * @method array findByMontantPayeHt(double $montant_paye_ht) Return CommonExecFacture objects filtered by the montant_paye_ht column
 * @method array findByMontantPayeTtc(double $montant_paye_ttc) Return CommonExecFacture objects filtered by the montant_paye_ttc column
 * @method array findByCommentaire(string $commentaire) Return CommonExecFacture objects filtered by the commentaire column
 * @method array findByOriginePiece(int $origine_piece) Return CommonExecFacture objects filtered by the origine_piece column
 * @method array findByNumeroWorkflow(string $numero_workflow) Return CommonExecFacture objects filtered by the numero_workflow column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecFacture objects filtered by the id_agent_crea column
 * @method array findByIdEntrepriseCrea(int $id_entreprise_crea) Return CommonExecFacture objects filtered by the id_entreprise_crea column
 * @method array findByDateCrea(string $date_crea) Return CommonExecFacture objects filtered by the date_crea column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecFacture objects filtered by the id_agent_modif column
 * @method array findByIdEntrepriseModif(int $id_entreprise_modif) Return CommonExecFacture objects filtered by the id_entreprise_modif column
 * @method array findByDateModif(string $date_modif) Return CommonExecFacture objects filtered by the date_modif column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonExecFacture objects filtered by the id_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return CommonExecFacture objects filtered by the date_cloture_parapheur column
 * @method array findByMontantRetenueGarantie(double $montant_retenue_garantie) Return CommonExecFacture objects filtered by the montant_retenue_garantie column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonExecFacture objects filtered by the motif_rejet column
 * @method array findByOrigine(boolean $origine) Return CommonExecFacture objects filtered by the origine column
 * @method array findByValidationViaExec(boolean $validation_via_exec) Return CommonExecFacture objects filtered by the validation_via_exec column
 * @method array findByDatePaiement(string $date_paiement) Return CommonExecFacture objects filtered by the date_paiement column
 * @method array findByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return CommonExecFacture objects filtered by the date_derniere_synchronisation column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecFactureQuery) {
            return $criteria;
        }
        $query = new CommonExecFactureQuery();
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
     * @return   CommonExecFacture|CommonExecFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecFacture A model object, or null if the key is not found
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
     * @return                 CommonExecFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `intitule`, `numero`, `id_contrat`, `id_contractant`, `statut`, `date_depot`, `date_validation`, `id_agent_validation`, `date_rejet`, `id_agent_rejet`, `montant_facture_ht`, `montant_facture_ttc`, `montant_a_paye_ht`, `montant_a_paye_ttc`, `montant_paye_ht`, `montant_paye_ttc`, `commentaire`, `origine_piece`, `numero_workflow`, `id_agent_crea`, `id_entreprise_crea`, `date_crea`, `id_agent_modif`, `id_entreprise_modif`, `date_modif`, `id_parapheur`, `date_cloture_parapheur`, `montant_retenue_garantie`, `motif_rejet`, `origine`, `validation_via_exec`, `date_paiement`, `date_derniere_synchronisation` FROM `exec_facture` WHERE `id` = :p0';
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
            $obj = new CommonExecFacture();
            $obj->hydrate($row);
            CommonExecFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecFacture|CommonExecFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID, $id, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecFacturePeer::INTITULE, $intitule, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecFacturePeer::NUMERO, $numero, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @see       filterByCommonExecContractant()
     *
     * @param     mixed $idContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_CONTRACTANT, $idContractant, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_DEPOT, $dateDepot, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_VALIDATION, $dateValidation, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_REJET, $dateRejet, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdAgentRejet($idAgentRejet = null, $comparison = null)
    {
        if (is_array($idAgentRejet)) {
            $useMinMax = false;
            if (isset($idAgentRejet['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_REJET, $idAgentRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRejet['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_REJET, $idAgentRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_REJET, $idAgentRejet, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureHt(1234); // WHERE montant_facture_ht = 1234
     * $query->filterByMontantFactureHt(array(12, 34)); // WHERE montant_facture_ht IN (12, 34)
     * $query->filterByMontantFactureHt(array('min' => 12)); // WHERE montant_facture_ht >= 12
     * $query->filterByMontantFactureHt(array('max' => 12)); // WHERE montant_facture_ht <= 12
     * </code>
     *
     * @param     mixed $montantFactureHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantFactureHt($montantFactureHt = null, $comparison = null)
    {
        if (is_array($montantFactureHt)) {
            $useMinMax = false;
            if (isset($montantFactureHt['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_HT, $montantFactureHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureHt['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_HT, $montantFactureHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_HT, $montantFactureHt, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureTtc(1234); // WHERE montant_facture_ttc = 1234
     * $query->filterByMontantFactureTtc(array(12, 34)); // WHERE montant_facture_ttc IN (12, 34)
     * $query->filterByMontantFactureTtc(array('min' => 12)); // WHERE montant_facture_ttc >= 12
     * $query->filterByMontantFactureTtc(array('max' => 12)); // WHERE montant_facture_ttc <= 12
     * </code>
     *
     * @param     mixed $montantFactureTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantFactureTtc($montantFactureTtc = null, $comparison = null)
    {
        if (is_array($montantFactureTtc)) {
            $useMinMax = false;
            if (isset($montantFactureTtc['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_TTC, $montantFactureTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureTtc['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_TTC, $montantFactureTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_FACTURE_TTC, $montantFactureTtc, $comparison);
    }

    /**
     * Filter the query on the montant_a_paye_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAPayeHt(1234); // WHERE montant_a_paye_ht = 1234
     * $query->filterByMontantAPayeHt(array(12, 34)); // WHERE montant_a_paye_ht IN (12, 34)
     * $query->filterByMontantAPayeHt(array('min' => 12)); // WHERE montant_a_paye_ht >= 12
     * $query->filterByMontantAPayeHt(array('max' => 12)); // WHERE montant_a_paye_ht <= 12
     * </code>
     *
     * @param     mixed $montantAPayeHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantAPayeHt($montantAPayeHt = null, $comparison = null)
    {
        if (is_array($montantAPayeHt)) {
            $useMinMax = false;
            if (isset($montantAPayeHt['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_HT, $montantAPayeHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAPayeHt['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_HT, $montantAPayeHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_HT, $montantAPayeHt, $comparison);
    }

    /**
     * Filter the query on the montant_a_paye_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAPayeTtc(1234); // WHERE montant_a_paye_ttc = 1234
     * $query->filterByMontantAPayeTtc(array(12, 34)); // WHERE montant_a_paye_ttc IN (12, 34)
     * $query->filterByMontantAPayeTtc(array('min' => 12)); // WHERE montant_a_paye_ttc >= 12
     * $query->filterByMontantAPayeTtc(array('max' => 12)); // WHERE montant_a_paye_ttc <= 12
     * </code>
     *
     * @param     mixed $montantAPayeTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantAPayeTtc($montantAPayeTtc = null, $comparison = null)
    {
        if (is_array($montantAPayeTtc)) {
            $useMinMax = false;
            if (isset($montantAPayeTtc['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAPayeTtc['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeHt(1234); // WHERE montant_paye_ht = 1234
     * $query->filterByMontantPayeHt(array(12, 34)); // WHERE montant_paye_ht IN (12, 34)
     * $query->filterByMontantPayeHt(array('min' => 12)); // WHERE montant_paye_ht >= 12
     * $query->filterByMontantPayeHt(array('max' => 12)); // WHERE montant_paye_ht <= 12
     * </code>
     *
     * @param     mixed $montantPayeHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantPayeHt($montantPayeHt = null, $comparison = null)
    {
        if (is_array($montantPayeHt)) {
            $useMinMax = false;
            if (isset($montantPayeHt['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_HT, $montantPayeHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeHt['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_HT, $montantPayeHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_HT, $montantPayeHt, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeTtc(1234); // WHERE montant_paye_ttc = 1234
     * $query->filterByMontantPayeTtc(array(12, 34)); // WHERE montant_paye_ttc IN (12, 34)
     * $query->filterByMontantPayeTtc(array('min' => 12)); // WHERE montant_paye_ttc >= 12
     * $query->filterByMontantPayeTtc(array('max' => 12)); // WHERE montant_paye_ttc <= 12
     * </code>
     *
     * @param     mixed $montantPayeTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantPayeTtc($montantPayeTtc = null, $comparison = null)
    {
        if (is_array($montantPayeTtc)) {
            $useMinMax = false;
            if (isset($montantPayeTtc['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_TTC, $montantPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeTtc['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_TTC, $montantPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_PAYE_TTC, $montantPayeTtc, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecFacturePeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByOriginePiece($originePiece = null, $comparison = null)
    {
        if (is_array($originePiece)) {
            $useMinMax = false;
            if (isset($originePiece['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ORIGINE_PIECE, $originePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originePiece['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ORIGINE_PIECE, $originePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ORIGINE_PIECE, $originePiece, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecFacturePeer::NUMERO_WORKFLOW, $numeroWorkflow, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the id_entreprise_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntrepriseCrea(1234); // WHERE id_entreprise_crea = 1234
     * $query->filterByIdEntrepriseCrea(array(12, 34)); // WHERE id_entreprise_crea IN (12, 34)
     * $query->filterByIdEntrepriseCrea(array('min' => 12)); // WHERE id_entreprise_crea >= 12
     * $query->filterByIdEntrepriseCrea(array('max' => 12)); // WHERE id_entreprise_crea <= 12
     * </code>
     *
     * @param     mixed $idEntrepriseCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdEntrepriseCrea($idEntrepriseCrea = null, $comparison = null)
    {
        if (is_array($idEntrepriseCrea)) {
            $useMinMax = false;
            if (isset($idEntrepriseCrea['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntrepriseCrea['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_CREA, $dateCrea, $comparison);
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
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the id_entreprise_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntrepriseModif(1234); // WHERE id_entreprise_modif = 1234
     * $query->filterByIdEntrepriseModif(array(12, 34)); // WHERE id_entreprise_modif IN (12, 34)
     * $query->filterByIdEntrepriseModif(array('min' => 12)); // WHERE id_entreprise_modif >= 12
     * $query->filterByIdEntrepriseModif(array('max' => 12)); // WHERE id_entreprise_modif <= 12
     * </code>
     *
     * @param     mixed $idEntrepriseModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdEntrepriseModif($idEntrepriseModif = null, $comparison = null)
    {
        if (is_array($idEntrepriseModif)) {
            $useMinMax = false;
            if (isset($idEntrepriseModif['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_MODIF, $idEntrepriseModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntrepriseModif['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_MODIF, $idEntrepriseModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_ENTREPRISE_MODIF, $idEntrepriseModif, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_MODIF, $dateModif, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ID_PARAPHEUR, $idParapheur, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
    }

    /**
     * Filter the query on the montant_retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantRetenueGarantie(1234); // WHERE montant_retenue_garantie = 1234
     * $query->filterByMontantRetenueGarantie(array(12, 34)); // WHERE montant_retenue_garantie IN (12, 34)
     * $query->filterByMontantRetenueGarantie(array('min' => 12)); // WHERE montant_retenue_garantie >= 12
     * $query->filterByMontantRetenueGarantie(array('max' => 12)); // WHERE montant_retenue_garantie <= 12
     * </code>
     *
     * @param     mixed $montantRetenueGarantie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByMontantRetenueGarantie($montantRetenueGarantie = null, $comparison = null)
    {
        if (is_array($montantRetenueGarantie)) {
            $useMinMax = false;
            if (isset($montantRetenueGarantie['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE, $montantRetenueGarantie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantRetenueGarantie['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE, $montantRetenueGarantie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::MONTANT_RETENUE_GARANTIE, $montantRetenueGarantie, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecFacturePeer::MOTIF_REJET, $motifRejet, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByOrigine($origine = null, $comparison = null)
    {
        if (is_string($origine)) {
            $origine = in_array(strtolower($origine), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecFacturePeer::ORIGINE, $origine, $comparison);
    }

    /**
     * Filter the query on the validation_via_exec column
     *
     * Example usage:
     * <code>
     * $query->filterByValidationViaExec(true); // WHERE validation_via_exec = true
     * $query->filterByValidationViaExec('yes'); // WHERE validation_via_exec = true
     * </code>
     *
     * @param     boolean|string $validationViaExec The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByValidationViaExec($validationViaExec = null, $comparison = null)
    {
        if (is_string($validationViaExec)) {
            $validationViaExec = in_array(strtolower($validationViaExec), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecFacturePeer::VALIDATION_VIA_EXEC, $validationViaExec, $comparison);
    }

    /**
     * Filter the query on the date_paiement column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePaiement('2011-03-14'); // WHERE date_paiement = '2011-03-14'
     * $query->filterByDatePaiement('now'); // WHERE date_paiement = '2011-03-14'
     * $query->filterByDatePaiement(array('max' => 'yesterday')); // WHERE date_paiement > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePaiement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDatePaiement($datePaiement = null, $comparison = null)
    {
        if (is_array($datePaiement)) {
            $useMinMax = false;
            if (isset($datePaiement['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_PAIEMENT, $datePaiement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePaiement['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_PAIEMENT, $datePaiement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_PAIEMENT, $datePaiement, $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function filterByDateDerniereSynchronisation($dateDerniereSynchronisation = null, $comparison = null)
    {
        if (is_array($dateDerniereSynchronisation)) {
            $useMinMax = false;
            if (isset($dateDerniereSynchronisation['min'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereSynchronisation['max'])) {
                $this->addUsingAlias(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecFacturePeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID_CONTRACTANT, $commonExecContractant->getId(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID_CONTRACTANT, $commonExecContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContractant() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractant');

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
            $this->addJoinObject($join, 'CommonExecContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractant relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractant', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecFactureQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecDpFacture object
     *
     * @param   CommonExecDpFacture|PropelObjectCollection $commonExecDpFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDpFacture($commonExecDpFacture, $comparison = null)
    {
        if ($commonExecDpFacture instanceof CommonExecDpFacture) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID, $commonExecDpFacture->getIdFacture(), $comparison);
        } elseif ($commonExecDpFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecDpFactureQuery()
                ->filterByPrimaryKeys($commonExecDpFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecDpFacture() only accepts arguments of type CommonExecDpFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecDpFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecDpFacture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecDpFacture');

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
            $this->addJoinObject($join, 'CommonExecDpFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecDpFacture relation CommonExecDpFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecDpFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecDpFactureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecDpFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecDpFacture', 'CommonExecDpFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceFacture object
     *
     * @param   CommonExecPieceFacture|PropelObjectCollection $commonExecPieceFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceFacture($commonExecPieceFacture, $comparison = null)
    {
        if ($commonExecPieceFacture instanceof CommonExecPieceFacture) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID, $commonExecPieceFacture->getIdFacture(), $comparison);
        } elseif ($commonExecPieceFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceFactureQuery()
                ->filterByPrimaryKeys($commonExecPieceFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceFacture() only accepts arguments of type CommonExecPieceFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceFacture');

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
            $this->addJoinObject($join, 'CommonExecPieceFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceFacture relation CommonExecPieceFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceFacture', 'CommonExecPieceFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecReception object
     *
     * @param   CommonExecReception|PropelObjectCollection $commonExecReception  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecReception($commonExecReception, $comparison = null)
    {
        if ($commonExecReception instanceof CommonExecReception) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID, $commonExecReception->getIdFacture(), $comparison);
        } elseif ($commonExecReception instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecReceptionQuery()
                ->filterByPrimaryKeys($commonExecReception->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecReception() only accepts arguments of type CommonExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecReception');

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
            $this->addJoinObject($join, 'CommonExecReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecReception relation CommonExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecReception', 'CommonExecReceptionQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartition($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonExecFacturePeer::ID, $commonExecRepartition->getIdFacture(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartition() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartition');

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
            $this->addJoinObject($join, 'CommonExecRepartition');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartition relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartition', 'CommonExecRepartitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecFacture $commonExecFacture Object to remove from the list of results
     *
     * @return CommonExecFactureQuery The current query, for fluid interface
     */
    public function prune($commonExecFacture = null)
    {
        if ($commonExecFacture) {
            $this->addUsingAlias(CommonExecFacturePeer::ID, $commonExecFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
